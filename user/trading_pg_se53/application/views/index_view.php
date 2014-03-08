<html>
<head>
<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/js/validate_register.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>resource/css/style.css"/>

</head>
<body>
<form name="frmLogin" id="frmLogin" action="<?php echo base_url();?>index_controller/input" method="post">
	 <input type="text" name="username" placeholder="username"><br />
	 <input type="password" name="password" placeholder="*******"><br />
	 <input type="password" name="cfpassword" placeholder="*******"/><br />
	 <input type="text" name="email" placeholder="email"><br />
	 <input type="text" name="phone" placeholder="phone"><br />
	 <select name="status" >
	 	<option value="admin">buyer</option>
		<option value="seller">seller</option>
	 </select><br />
	 
	 <input type="file" name="userfile" size="20"/>
	 <br />
	 
	 <input type="submit" name="submit" value="submit">
</form>

</body>
</html>