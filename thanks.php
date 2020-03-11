<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Спасибо</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
    <form class="transparent" method = "post">
      <div class="form-inner">
        <h3>Спасибо за регистрацию!</h3>
        <br>
        <p>Хотите авторизоваться ?</p>
        <br>
        <div class="buttons">
          <input type="submit" value="Да" name = "btn" >
          <input id="Nosubmit" type="submit" value="Нет" name = "btn">
        </div>
      </div>
    </form>
</body>
<?php

$input = $_POST['btn'];
if($input == 'Да'){
  echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/sing_in.html">';
} else if ($input == 'Нет'){
  echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/index.html">';
}

?>
</html>