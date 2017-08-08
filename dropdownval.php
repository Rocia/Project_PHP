<HTML>
   <?php
        $submittedValue = "";
        $value0 = "";
        $value1 = "Banana";
        $value2 = "Apple";
        $value3 = "Orange";
        if (isset($_POST["FruitList"])) {
            $submittedValue = $_POST["FruitList"];
        }
    ?>
      <form action="" name="fruits" method="post">
        <select project="FruitList" id="FruitList" name="FruitList">
         <option value = "<?php echo $value0; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value0; ?></option>
         <option value = "<?php echo $value1; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value1; ?></option>
         <option value = "<?php echo $value2; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value2; ?></option>
         <option value = "<?php echo $value3; ?>"<?php echo ($value0 == $submittedValue)?" SELECTED":""?>><?php echo $value3; ?></option>
        </select>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </form>
</HTML>
