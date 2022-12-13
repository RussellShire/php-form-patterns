<html>
<body>
<!--Your code goes here-->
<form method="get">
  <h3>Addition:</h3>
  <input name="num1add" type="number" />
  <p style='display:inline'>+</>
  <input name="num2add" type="number" />
  <button type="submit">=</button>
  <p style='display:inline'>
    <?= $_GET["num1add"]+$_GET["num2add"]?>
  </p>
</form>

<form method="get">
  <h3>Division:</h3>
  <input name="num1div" type="number" />
  <p style='display:inline'>÷</>
  <input name="num2div" type="number" />
  
  <button type="submit">=</button>
  <p style='display:inline'>
    <?= $_GET["num1div"]/$_GET["num2div"]?>
  </p>
</form>

<a href="index.php">Reset</a>
</body>
</html>
