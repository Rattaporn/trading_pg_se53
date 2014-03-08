<div id="page" class="container">
<!--side menu-->
 <div id="sidebar">
  <div class="sidemenu">
    <h4>My Account</h4>	
	<div>
	 <img src="<?php echo base_url();?>resource/imgProfiles/<?php echo $this->session->userdata('img_profile');?>" alt="profile" />
	</div>	
	<ul>
	 <li><i class="fa fa-pencil-square-o"></i><a href="<?php echo base_url();?>register/editprofile/<?php echo $this->session->userdata('uid');?>">Edit profile</a></li>
	 <li><i class="fa fa-lock"></i><a href="<?php echo base_url();?>register/changepassword/<?php echo $this->session->userdata('uid');?>">Change password</a></li>
	</ul>		
  </div>
 </div>
 
 <div class="clear-all"></div>
 
 <!--content -->
 <div id="content">
  <h4>Change Password</h4>
  <hr>
  <?php echo form_open('');?>
  <div class="coninput">
   <label>Old Password</label>
   <div><input type="password" name="password" value=""/></div>
  </div>
  
   <div class="coninput">
   <label>New Password</label>
   <div><input type="password" name="newpassword" value=""/></div>
  </div>
  
   <div class="coninput">
   <label>Confirm New Password</label>
   <div><input type="password" name="cfnewpassword" value=""/></div>
  </div>
  
  <div class="coninput">  
   <div><input type="submit" name="submit" value="save"/></div>
  </div>

 </div>
 
 <div class="clear-all"></div>
</div>