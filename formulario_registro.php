<form class="" method="post" action="">
  <label for="inputEmail" >Usuario</label>
  <input type="text" id="inputEmail" name="email" placeholder="Usuario" pattern="[A-Za-z_-0-9]{1,20}" required autofocus value="<?php if($_COOKIE['email']) ?>"> 

  <label for="inputPassword" >Contraseña</label>
  <input type="password" id="inputPassword" name="password" placeholder="Contraseña" pattern="[A-Za-z_-0-9]{1,20}" required>

  <input type="checkbox" id="acordate" value="remember-me" name="acordate">
  <label for="acordate">Recuérdame</label>

  <br>
  <br>

  <button type="submit" name="loguear" class="btn">Log In</button>

</form>

<br>
<br>
<div class="registrarse">
  <a href="registro.php" class="btn">Registrarse</a>
</div>

isset($_COOKIE['email'])? $_COOKIE['email'] : ""
isset($_COOKIE['password'])? $_COOKIE['password'] : ""