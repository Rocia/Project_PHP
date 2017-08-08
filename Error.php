<?php
   
    error_reporting(E_ALL);
    define('DEBUG', true);
    define('LINEBREAK', "\r\n");
   
    error::initiate('./error_backtrace.log');
   
    try
        trigger_error("First error", E_USER_NOTICE);
    catch ( ErrorException $e )
        print("Caught the error: ".$e->getMessage."<br />\r\n" );
   
    trigger_error("This event WILL fire", E_USER_NOTICE);
   
    trigger_error("This event will NOT fire", E_USER_NOTICE);
   
    abstract class error {
       
        public static $LIST = array();
       
        private function __construct() {}
       
        public static function initiate( $log = false ) {
            set_error_handler( 'error::err_handler' );
            set_exception_handler( 'error::exc_handler' );
            if ( $log !== false ) {
                if ( ! ini_get('log_errors') )
                    ini_set('log_errors', true);
                if ( ! ini_get('error_log') )
                    ini_set('error_log', $log);
            }
        }
       
        public static function err_handler($errno, $errstr, $errfile, $errline, $errcontext) {
            $l = error_reporting();
            if ( $l & $errno ) {
               
                $exit = false;
                switch ( $errno ) {
                    case E_USER_ERROR:
                        $type = 'Fatal Error';
                        $exit = true;
                    break;
                    case E_USER_WARNING:
                    case E_WARNING:
                        $type = 'Warning';
                    break;
                    case E_USER_NOTICE:
                    case E_NOTICE:
                    case @E_STRICT:
                        $type = 'Notice';
                    break;
                    case @E_RECOVERABLE_ERROR:
                        $type = 'Catchable';
                    break;
                    default:
                        $type = 'Unknown Error';
                        $exit = true;
                    break;
                }
               
                $exception = new \ErrorException($type.': '.$errstr, 0, $errno, $errfile, $errline);
               
                if ( $exit ) {
                    exc_handler($exception);
                    exit();
                }
                else
                    throw $exception;
            }
            return false;
        }
       
        function exc_handler($exception) {
            $log = $exception->getMessage() . "\n" . $exception->getTraceAsString() . LINEBREAK;
            if ( ini_get('log_errors') )
                error_log($log, 0);
            print("Unhandled Exception" . (DEBUG ? " - $log" : ''));
        }
       
    }
?>
