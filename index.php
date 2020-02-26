<html>
    <head>
        <meta charset="utf-8">
        <title>Форма</title>
        <link rel="stylesheet" href="main.css">
    </head>

    <style id="inverter" media="none">
        html { background-color: rgb(255, 255, 255); filter: invert(100%) }
        body { background-color: inherit }
        img:not([src*=".png"]), [style*="url("] { filter: invert(100%) }
        .transparent:not([ background-image*= ".png"]), [url*="url("] {filter: invert(100%)}
      </style>
    
    <body>
        <div class="wrap">
            <label class="button">
              <input type="checkbox" id="themer">
              Dark theme: <span aria-hidden="true"></span>
            </label>
        <form class="transparent">
            <div class="form-inner">
                <h3>Регистрация</h3>
                
                <br>

                <label for="firstname">Имя</label>
                <input type="text" id="firstname" required autocomplete="off">

                <label for="lastname">Фамилия</label>
                <input type="text" id="lastname" required autocomplete="off">

                <label for="email">E-mail</label>
                <input type="email" id="email" required autocomplete="off">

                <label for="username">Логин</label>
                <input type="text" id="username" required autocomplete="off">

                <form name="ValidationForm">

                    <label for="password">Пароль</label>
                    <input id="password1" type="password" required autocomplete="off">

                    <label for="password">Подтверждение пароль</label>
                    <input id="password2" type="password" required autocomplete="off">

                </form>

                <br><br>

                <input type="submit" value="Отправить">
           </div>
         </form>

         <script type="text/javascript">

            function validationValue(){
                let firstname = document.getElementById("firstname").value;
                let lastname = document.getElementById("lastname").value;
                let username = document.getElementById("username").value;
            /*эта херабора не рабит над подобрать регулярку, ну или научиться пользоваться методом, ну или у меня руки кривые*/
                regexp = new RegExp("/[А-Я][а-я][A-Z][a-z]*/");
                if(regexp.test(firstname))
                    document.getElementById("firstname").setCustomValidity("Недопустимые символы");
                if(regexp.test(lastname))
                    document.getElementById("lastname").setCustomValidity("Недопустимые символы");
                if(regexp.test(username))
                    document.getElementById("username").setCustomValidity("Недопустимые символы");
                 /*тут должна была быть куча проверок с регулярками и т.д
                    Но кому это надо если проверки формы более приоритетны и смысла в этой функции нет(ну и .....)*/
                     
                
            }


            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;

                document.getElementById("firstname").onchange = validationValue;
                document.getElementById("lastname").onchange = validationValue;
                document.getElementById("username").onchange = validationValue;
            }
            function validatePassword(){
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if(pass1 !== pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            }

        </script>

        <script>
            var checkbox = document.getElementById('themer');
            var invertor = document.getElementById('inverter');

            checkbox.addEventListener('change', function () {
            invertor.setAttribute('media', this.checked ? 'screen' : 'none');
            invertor.textContent = invertor.textContent.trim();
            });       
         </script>
    </body>
    <?php
            $connection = mysqli_connect('localhost', 'root', '');

            if($connection == false)
            {
                /* echo '$connection = Нет; '; */
                exit();
            } else
            {
                /* echo '$connection = Да; ';*/
            }

            $db=mysqli_select_db($connection, "mysql");
            //mysqli_set_charset("utf8");
            if (!$connection || !$db)
            {
            exit(mysqli_error());
            }


            $name1 = $_POST['nick'];
            $notes1 = $_POST['notes']; 
            $date1 = $_POST['datetime'];

            echo ($name1);
            echo ($notes1);
            echo ($date1);


          /*  $result = mysqli_query("INSERT INTO `tablica`(`name`, `notes`, `date`) VALUES ('$name1','$notes1','$date')");
            if ($result) {
                echo "Данные успешно сохранены!";
            }
            else {
                echo "Произошла ошибка, пожалуйста повторите попытку.";
            } 
*/
?> 


</html>