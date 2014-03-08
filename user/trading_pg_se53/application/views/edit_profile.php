<div id="page" class="container">
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
 
 <div id="content">
  <h4>Personal Information</h4>
  <hr>
    
  <?php echo form_open('register/update');?>
  
  <div class="coninput">
   <label>Name</label>
   <div>
     <input type="text" name="firstname" value="<?php echo $data[0]['firstname'];?>" />
     <input type="text" name="lastname" value="<?php echo $data[0]['lastname'];?>"/>
   </div>
   
  </div>
  
  
  <div class="coninput">
   <label>Email</label>
   <div><input type="text" name="email" value="<?php echo $data[0]['email'];?>" /></div> 
  </div>
 
  
 <div class="coninput">
   <label>Address</label>
   <div><input type="text" name="address" value="<?php echo $data[0]['address'];?>" /></div>
 </div>
 
 
 <div class="coninput">
   <label>Phone</label>
   <div><input type="text" name="phone" value="<?php echo $data[0]['phone'];?>" /></div>
 </div>
 
 
 <div class="coninput">
   <label>Account number</label>
   <div><input type="text" name="accnum" value="<?php echo $data[0]['accnum'];?>" /></div>  
 </div>
 
 
 <div class="coninput">
   <label>Avatar</label>
   <?php echo form_open_multipart('upload/do_upload');?>
   <div><input type="file" name="userfile"/></div>
 </div>
 
 <div class="coninput">   
   <div><input type="submit" name="submit" value="save" /></div>
 </div>
 
 </div> 
 <div class="clear-all"></div>
</div>