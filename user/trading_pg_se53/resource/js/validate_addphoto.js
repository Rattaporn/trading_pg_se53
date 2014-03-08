$(document).ready(function(){

	$("#frmAddphoto").validate({
	errorClass:'showerror',
	rules:{
			img_name:{
				required : true
			},
			img_type:{
				required :true		
			},		
			description:{
				required : true
			},
			keyword:{
				required : true
			},
			place_name:{
				required : true				
			},
			address:{
				required : true	
			},
			latitude:{
				required : true,
				number   : true
			},
			longtitude:{
				required : true,
				number 	  : true
			},
			imagefile:{
			    required : true
			}
		},
	messages:{
			img_name:{
				required:" Please enter Picture name."
			},
			img_type:{
				required : "Please select an option."				
			},			
			description:{
				required : "Please enter description."
			},
			keyword:{
				required : "Please enter keyword."
			},
			place_name:{
				required : "Please enter Place."
			},
			address:{
				required : "Please enter address."
			},
			latitude:{
				required : "Please enter latitude.",
				number: "Please enter a valid number."
			},			
			longtitude:{
				required : "Please enter longtitude.",
				number: "Please enter a valid number."
			},
			imagefile:{
				required : "Please choose file"
			}
			
			
		} //close message
	});// close #vali
});//close document