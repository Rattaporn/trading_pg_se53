<script src="<?php echo base_url();?>resource/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/validate_addphoto.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/easyResponsiveTabs.js" type="text/javascript"></script>
<div id="page" class="container">
<div id="verticalTab" style="margin-top:215px;"> 
  
   
   
   <ul class="resp-tabs-list" style="margin-top:215px;">
        <li><span class="fontawesome-upload" style="font-weight:200; margin-right:12px;"></span>Photo</li>
        <li><i class="fa fa-info-circle" style="font-weight:200; margin-right:12px;"></i>Graphic</li>
		<li><i class="fa fa-info-circle" style="font-weight:200; margin-right:12px;"></i>Place</li>
                                      
    </ul>
    <div class="resp-tabs-container" style="margin-top:5px;">
     <div class="photo-type" style="margin-top:180px;">
	 	<?php if(count($img_name)<28){ ?>
	<?php $num = 28/count($img_name);?>
	<?php for($i = 0; $i < intval($num); $i++){?>
	<?php foreach( $img_name as $img){?>
	 <img src="<?php echo base_url();?>resource/product/<?php echo $img['path_name'];?>" width="150px" height="150px" >
	 
	 <?php } ?>
	 <?php }
	  $diff = intval($num)*count($img_name);
	 if($diff !=28 ){ 
	 	$a=28-$diff;
		for($i = 0; $i < $a; $i++){?>
	 <img src="<?php echo base_url();?>resource/product/<?php echo $img_name[$i]['path_name'];?>" width="150px" height="150px" >
	 
	 <?php } ?>
	
	 	
	<?php } ?>
	<?php } ?>
	<?php if(count($img_name)>27){ 
	for($i = 0; $i < 28; $i++){ ?>
	 <img src="<?php echo base_url();?>resource/product/<?php echo $img_name[$i]['path_name'];?>" width="150px" height="150px" >
	 
	 <?php } ?>
		
	<?php } ?>
	 </div>
	
   <div class="graphic-type">
   
   </div>
   <div class="map-type">
   
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
