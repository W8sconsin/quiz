<!DOCTYPE HTML>  
<html>
<head>
<style>
body {background-color: #FEFCFF}
p {color: darkgray;}
input, textarea {background-color: #EBF4FA;}
.error {color: #3170D1;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = $q7Err = $q8Err = $q9Err = $q10Err = "";
$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = $q10 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["q1"])) {
    $q1Err = "*Question 1 is required";
  } else {
    $q1 = test_input($_POST["q1"]);
    // check if q1 only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$q1)) {
      $q1Err = "*Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["q2"])) {
    $q2Err = "*Question 2 is required";
  } else {
    $q2 = test_input($_POST["q2"]);
    // check if q1 only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$q2)) {
      $q2Err = "*Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["q3"])) {
    $q3Err = "*Question 3 is required";
  } else {
    $q3 = test_input($_POST["q3"]);
    // check if q1 only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$q3)) {
      $q3Err = "*Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["q4"])) {
    $q4Err = "*Question 4 is required";
  } else {
    $q4 = test_input($_POST["q4"]);
    // check if q1 only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$q4)) {
      $q4Err = "*Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["q5"])) {
    $q5Err = "*Question 5 is required";
  } else {
    $q5 = test_input($_POST["q5"]);
    // check if q1 only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$q5)) {
      $q5Err = "*Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["q6"])) {
    $q6Err = "*Question 6 is required";
  } else {
    $q6 = test_input($_POST["q6"]);
  }

  if (empty($_POST["q7"])) {
    $q7Err = "*Question 7 is required";
  } else {
    $q7 = test_input($_POST["q7"]);
  }

  if (empty($_POST["q8"])) {
    $q8Err = "*Question 8 is required";
  } else {
    $q8 = test_input($_POST["q8"]);
  }

  if (empty($_POST["q9"])) {
    $q9Err = "*Question 9 is required";
  } else {
    $q9 = test_input($_POST["q9"]);
  }

  if (empty($_POST["q10"])) {
    $q10Err = "*Question 10 is required";
  } else {
    $q10 = test_input($_POST["q10"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Quiz Template</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p><span class="error">Directions: Please write the word on the blank.</span></p>
  1) The rain in <input type="text" name="q1" value="<?php echo $q1;?>"> falls mainly in the plain.
  <span class="error"><?php echo $q1Err;?></span>
  <br><br>
  2) The rain in <input type="text" name="q2" value="<?php echo $q2;?>"> falls mainly in the plain.
  <span class="error"><?php echo $q2Err;?></span>
  <br><br>
  3) The rain in <input type="text" name="q3" value="<?php echo $q3;?>"> falls mainly in the plain.
  <span class="error"><?php echo $q3Err;?></span>
  <br><br>
  4) The rain in <input type="text" name="q4" value="<?php echo $q4;?>"> falls mainly in the plain.
  <span class="error"><?php echo $q4Err;?></span>
  <br><br>
  5) The rain in <input type="text" name="q5" value="<?php echo $q5;?>"> falls mainly in the plain.
  <span class="error"><?php echo $q5Err;?></span>
  <br><br>
  <p><span class="error">Directions: Please choose true or false.</span></p>
  6) <label for="q6">Write an awesome true or false question.</label><br>
  <input type="radio" name="q6" <?php if (isset($q6) && $q6=="True") echo "checked";?> value="True">True
  <input type="radio" name="q6" <?php if (isset($q6) && $q6=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q6Err;?></span>
  <br><br>
  7) <label for="q7">Write an awesome true or false question.</label><br>
  <input type="radio" name="q7" <?php if (isset($q7) && $q7=="True") echo "checked";?> value="True">True
  <input type="radio" name="q7" <?php if (isset($q7) && $q7=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q7Err;?></span>
  <br><br>
  8) <label for="q8">Write an awesome true or false question.</label><br>
  <input type="radio" name="q8" <?php if (isset($q8) && $q8=="True") echo "checked";?> value="True">True
  <input type="radio" name="q8" <?php if (isset($q8) && $q8=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q8Err;?></span>
  <br><br>
  9) <label for="q9">Write an awesome true or false question.</label><br>
  <input type="radio" name="q9" <?php if (isset($q9) && $q9=="True") echo "checked";?> value="True">True
  <input type="radio" name="q9" <?php if (isset($q9) && $q9=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q9Err;?></span>
  <br><br>
  <p><span class="error">Directions: Please write the essay.</span></p>
  10) <label for="q9">Think of the perfect essay prompt.</label><br>
  <textarea name="q10" rows="5" cols="40"><?php echo $q10;?></textarea>
  <br><span class="error"><?php echo $q10Err;?></span><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<h2>What you wrote:</h2>";
echo "1) " . $q1;
echo "<br>";
echo "2) " . $q2;
echo "<br>";
echo "3) " . $q3;
echo "<br>";
echo "4) " . $q4;
echo "<br>";
echo "5) " . $q5;
echo "<br>";
echo "6) " . $q6;
echo "<br>";
echo "7) " . $q7;
echo "<br>";
echo "8) " . $q8;
echo "<br>";
echo "9) " . $q9;
echo "<br>";
echo "10) " . $q10;
}
?>

</body>
</html>
