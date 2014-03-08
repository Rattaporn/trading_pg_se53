<!-- Start Page center -->

 <div id="page" class="container"> 

    <div id="loading"></div>
    <div id="gallery"></div>
	
   <!-- JavaScript Includes -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>resource/swipebox/jquery.swipebox.min.js"></script>
   <!-- <script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.loadImage.js"></script>-->
   <!-- <script type="text/javascript" src="<?php echo base_url();?>resource/js/script.js"></script>-->
	


	<div id="top" class="container">
	  <div id="salogan">
	     <img src="<?php echo base_url();?>resource/images/salogan-1.png" />
	  </div>
	  
	  <div id="search">      
	    <form id="searchthis" action="/search" style="display:inline;" method="get">
		  <!-- Search box for blogger by Namanyay Goel //-->
		  <input id="search-box" name="txtSearch" size="40" type="text" placeholder="  Enter keywords .. "/>
		  <input id="search-btn" value="Search" type="submit"/> 
		</form>             
      </div>
	</div>
	
</div>