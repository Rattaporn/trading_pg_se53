<div id="page" class="container">

<div id="login">
  <h1><span class="fontawesome-lock"></span>Sign In</h1>
 
<?php echo form_open('login_controller/login')?>
	
	<fieldset>
	  <p style="color: red;"><?php echo $this->session->flashdata('fail');?></p>
	  <p><input type="text" name="username" value=""   ></p> 
	  <?php echo form_error('username', '<font color="error">'); ?>
	  <p><input type="password" name="password" value=""  ></p> 
	  <?php echo form_error('password', '<font color="error">'); ?>
	  <p><a href="#">Forgot Password?</a></p>
	  <p><input type="submit" value="Login"></p>
	  
	</fieldset>
</form>
</div>

<div class="clear-all"></div>

</div>
 <!-- End Page center -->