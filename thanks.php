<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <title>Thanks</title>

    <link rel="stylesheet" href="css/thanks.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/StartMain.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <body style="background: black url(image/6.jpg) no-repeat;">
            <nav class="navbar navbar-expand-lg fixed-top ">
                <a class="navbar-brand" href="startPage.html">WebSite</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-4">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="sing_up.html">Sing Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="sing_in.html">Sing In</a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
            
        <form class="transparent" method = "post">
        <div class="form-inner">
            <h3>Спасибо за регистрацию!</h3>
            <br>
            <p>Хотите авторизоваться ?</p>
            <div class="buttons">
                <div class="b1"><input type="submit" value="Да" name = "btn" ></div>
                <div class="b1"><input id="Nosubmit" type="submit" value="Нет" name = "btn"></div>
            </div>
        </div>
        </form>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <footer style="flex-shrink: none;" class="py-4 bg-black text-white-50">
            <div class="container text-center" style="color: white;">
              <small>Copyright &copy; Your Website</small>
            </div>
        </footer>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
    </body>
<?php

$input = $_POST['btn'];
if($input == 'Да'){
  echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/sing_in.html">';
} else if ($input == 'Нет'){
  echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/startPage.html">';
}

?>
</html>