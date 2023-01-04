<html>
<body>
<?php 
  $add_answer = '';
  $div_answer = '';

  if($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["num1add"])) {
    $add_answer = $_POST["num1add"]+$_POST["num2add"];
  }
  if($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["num1div"])) {
    $div_answer = $_POST["num1div"]/$_POST["num2div"];
  }
?>

<form method="post">
  <h3>Addition:</h3>
  <input name="num1add" type="number" />
  <p style='display:inline'>+</>
  <input name="num2add" type="number" />
  <button type="submit">=</button>
  <p style='display:inline'>
    <?= $add_answer ?>
  </p>
</form>

<form method="post">
  <h3>Division:</h3>
  <input name="num1div" type="number" />
  <p style='display:inline'>÷</>
  <input name="num2div" type="number" />
  
  <button type="submit">=</button>
  <p style='display:inline'>
    <?= $div_answer ?>
  </p>
</form>

<a href="calculator.php">Reset</a>
</body>
</html>
