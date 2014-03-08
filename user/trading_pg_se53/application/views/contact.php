<div id="page" class="container">

 	<div id="side-contact" >
    	<h3>Contact us</h3>
    	<p>If you interested in a possile booking or would like to know more, please contact me through phone or email. Thank you.</p>
    	<p>Tel : +(66)832108401</p>
   		<p>Email : staff@test.com</p>
    </div>
  <!-- Start HR Line-->
     <div id="line"><hr /></div>
  <!-- End HR Line-->
  
   <div id="form-contact" >
   
   <?php echo form_open('index/contact')?>
   
   <table border="0">
     <tr>
       <td>Name</td>
       <td><input type="text" name="txtName" /></td>
	   <td><?php echo form_error('txtName', '<font color="error">'); ?></td>
     </tr>
     <tr>
       <td>Email</td>
       <td><input type="text" name="txtEmail" /></td>
	   <td><?php echo form_error('txtEmail', '<font color="error">'); ?></td>
     </tr>
     <tr>
       <td>Title</td>
       <td><input type="text" name="txtTitle" /></td>
	   <td><?php echo form_error('txtTitle', '<font color="error">'); ?></td>
     </tr>
     <tr>
       <td>Massage</td>
       <td><textarea name="txtMessage" cols="30" rows="5"></textarea></td>
	   <td><?php echo form_error('txtMessage', '<font color="error">'); ?></td>
     </tr>
      <tr>
       <td></td>
       <td>
         <input type="submit" value="send" name="submit"/>
         <input type="reset" value="reset" name="reset"/>
         
       </td>
     </tr>
    </table>
 </div>


</div>
<!-- End Page center -->