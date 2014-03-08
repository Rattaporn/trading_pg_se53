
<script src="<?php echo base_url();?>resource/js/jquery.validate.js" type="text/javascript"></script>

<div id="page" class="container">

  <div id="multi-form" >
 	<div id="navigation" >
 		<h2>Sign up</h2>		
 	</div>
	
	<div class="clear-all"></div>
		
	 <!-- multistep form -->
 	<form name="msform" id="msform" action="<?php echo base_url();?>register/input"  method="post">
 
      <!-- progressbar -->

      <ul id="progressbar">
          <li class="active">Account Setup</li>
          <li>Personal Details</li>
          <li>Social Profiles</li>          
      </ul>
	  
      <!-- fieldsets -->
      <fieldset id="fs1">
          <h2 class="fs-title">Create your account</h2>
          <h3 class="fs-subtitle">for member</h3>
          <input type="text" name="username" class="username" placeholder="Username" required />
          <input type="password" name="password" id="password" placeholder="Password" required />
          <input type="password" name="cfpassword" placeholder="Confirm Password" id="cfpassword" required  />
		 <font id="error" style="color:red;display:none;">please enter same password</font>
          <input type="button" name="next" class="next action-button" value="Next" required/>
      </fieldset>
	 	
      <fieldset id="fs2">
      	  <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">We will never sell it</h3>
          <input type="text" name="firstname" placeholder="First Name" required/>
          <input type="text" name="lastname" placeholder="Last Name" required/>
          <input type="text" name="phone" maxlength="10" placeholder="085712xxxx" required/>
          <textarea name="address" placeholder="Address" required></textarea>
          <input type="button" name="previous" class="previous action-button" value="Previous" required/>
          <input type="button" name="next" class="next action-button" value="Next" required/>
      </fieldset>
	  
      <fieldset id="fs3">
          <h2 class="fs-title">Trade Details</h2>
          <h3 class="fs-subtitle">upload avatar.</h3>
		  <?php echo form_open_multipart('upload/do_upload');?>
          <input type="file" name="userfile"  required/>
          <input type="text" name="email" placeholder="example@test.com" required/>
		  <input type="text" name="accnum" maxlength="13" placeholder="account number : xxx-x-xxxxx-x" required/>
          <input type="button" name="previous" class="previous action-button" value="Previous" required/>
          <input type="submit" name="submit" class="submit action-button" value="Submit" />
      </fieldset>
   </form>
   
    
	
  <!-- jQuery -->
<script type="text/javascript">
//jQuery time
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches


$(".next").click(function(){
	
	
	if(document.getElementById('cfpassword').value != ""){
		if(document.getElementById('cfpassword').value == document.getElementById('password').value){
			$('#error').css('display','none');
		}else{
			$('#error').css('display','block');
			return false;
		}
	}
    $('#msform').validate();
    if (!$('#msform').valid()) {
        return false;
    }
    
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return true;
})

});
</script>
  </div> <!--div end multiform-->
  
  
  <div class="clear-all"></div>
</div>
