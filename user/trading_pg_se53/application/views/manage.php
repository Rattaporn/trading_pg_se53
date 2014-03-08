<script src="<?php echo base_url();?>resource/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/validate_addphoto.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/easyResponsiveTabs.js" type="text/javascript"></script>
<div id="page" class="container">
 
  <div id="verticalTab"> 
   <div id="sidebar">
    <div class="sidemenu">  
    <h3>My Account</h3>	
	<div><img src="<?php echo base_url();?>resource/imgProfiles/<?php echo $this->session->userdata('img_profile');?>" alt="profile" /></div>
    </div>
   </div>
   
   <ul class="resp-tabs-list">
        <li><span class="fontawesome-upload" style="font-weight:200; margin-right:12px;"></span>Add photo</li>
        <li><i class="fa fa-info-circle" style="font-weight:200; margin-right:12px;"></i>Upload history</li>
                                      
    </ul>
    <div class="resp-tabs-container">
     <div class="add-photo">
      <h2>Add New Photo</h2>
  	  <hr>     
	 <form name="frmAddphoto" id="frmAddphoto" action="<?php echo base_url();?>trading/addPhoto" method="post">	 
	  <table>
	 
	  <thead>
	   <tr>
	    <th>Photo Details</th>
		<th></th>
	   </tr>
	  </thead>
	  
	  <tbody>
	   <tr bgcolor="#eef3fb">
	    <td>Picname</td>
		<td><input type="text" name="img_name"/></td>
	   </tr>
	   
	   <tr>
	    <td>Type</td>
		<td><select id="img_type" name="img_type" >
		<option value="">Choose type</option>
	    <option value="photo">Photo</option>
		<option value="graphic">Graphic</option>
		<option value="place">Place</option>
	  	</select></td>
	   </tr>
	   
	   <tr bgcolor="#eef3fb">
	    <td>Description</td>
		<td><textarea id="description" name="description" cols="30" rows="3"></textarea></td>
	   </tr>
	   
	   <tr>
	    <td>Keyword</td>
		<td><textarea id="keyword" name="keyword" cols="30" rows="3"></textarea></td>
	   </tr>
	   
	   <tr bgcolor="#eef3fb">
	    <td>Place</td>
		<td><input type="text" name="place_name"/></td>
	   </tr>
	   
	   <tr>
	    <td>Address</td>
		<td><textarea id="address" name="address" cols="30" rows="3" ></textarea></td>
	   </tr>
	   
	   <tr bgcolor="#eef3fb">
	    <td>Latitude</td>
		<td><input type="text" name="latitude"/></td>
	   </tr>
	   
	   <tr>
	    <td>Longtitude</td>
		<td><input type="text" name="longtitude"/></td>
	   </tr>
	   
	   <tr  bgcolor="#eef3fb">
	    <td>Upload File</td>
		<td><input type="file" name="imagefile"/></td>
	   </tr>
	   
	   <!--<tr>
	    <td></td>
		<td><img src="<?php echo base_url();?>resource/images/5.png" width="75" height="75"/></td>
	   </tr>-->	   
	   	   
	  </tbody>
	  
	  <tfoot>
	   <tr>
	    <td></td>
		<td><input type="submit" name="submit" value="Submit"/><input type="reset" name="reset" value="Reset" /></td>
	   </tr>
	   
	  </tfoot>	  
	 </table>
    </div>
	
   <div class="info">
     <h2>Upload history</h2>
     <hr>
    <?php echo form_open('')?>	 
	 <table>
	  <thead>
	   <tr>
	    <th></th>
		<th>NO.</th>
		<th>filename</th>
		<th>Date</th>
		<th>Download</th>
		<th>Tools</th>
	   </tr>
	  </thead>
	  
	  <tbody>
	   <tr>
	    <td><input type="checkbox" name="" /></td>
		<td>1</td>
		<td>IMG_17237.png</td>
		<td>10-11-13</td>
		<td>5 times</td>
		<td><a href="#"><img src="<?php echo base_url();?>resource/images/edit6.png"/></a><a href="#"><img src="<?php echo base_url();?>resource/images/del.png"/></a></td>
	   </tr>
	  </tbody>
	 </table>
   </div>
   </div>
   </div>
   <br />
   <div style="height: 30px; clear: both"></div>
        
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>   
  
 
  	
</div>