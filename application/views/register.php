
<!DOCTYPE html>
<html>
<head>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <title>Регистрация</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center">Регистрация</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Регистрация</div>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>index.php/register/validation">
     <div class="form-group">
      <label>Введите имя</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Введите Email</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Введите пароль</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="g-recaptcha" data-sitekey="6LfrYOAUAAAAAEgYxnnYw06ZaOiYHi95iLMmygmi"></div>
     <div class="form-group">
      <input type="submit" name="register" value="Регистрация" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
