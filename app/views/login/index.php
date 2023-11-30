<div class="login">
<h2>Login Sistem</h2>
<br>

<form action="<?php echo URL; ?>/login/proses" method="post">
     <div class="inputbox">
          <input type="email" name="email" placeholder="Email" required>
     </div>
     <div class="inputbox">
          <input type="password" name="password" placeholder="Password" required>
     </div>
     <div class="inputbox">
          <input type="submit" name="submit" value="Login" id="btn">
     </div>
</form>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
     <div class="error">
          Login tidak di temukan
     </div>
<?php } ?>