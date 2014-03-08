$(document).ready(function(){
	
	$("#msform").validate({
	
	errorClass:'showerror',
	rules:{
			username:{
				required : true
			},
			password:{
				required :true		
			},
			cfpassword:{
				required : true,
				equalTo : '#password'
			},
			firstname:{
				required : true
			},
			lastname:{
				required : true
			},
			phone:{
				required :true,
				number : true,
				maxlength : 10
			},
			address:{
				required : true
			},
			userfile:{
				required : true
			},
			email :{
				required : true,
				email : true
			},
			accnum :{
				required : true
			}
		},
	messages:{
			username:{
				required:" Please enter username."
			},
			password:{
				required : "Please enter password."				
			},
			cfpassword:{
				required : "Please enter password.",
				equalTo : "Please enter the same value again."
			},
			firstname:{
				required : "Please enter firstname."
			},
			lastname:{
				required : "Please enter lastname."
			},
			phone:{
				required : "Please enter phone number.",
				number : "Please enter  a valid number."
			},
			address:{
				required : "Please enter address."
			},			
			email:{
				required : "Please enter email.",
				email: "Please enter a valid email address."
			},
			accnum:{
				required : "Please enter Account number."
			}
			
		} //close message
	});// close #vali
	
	  /*  if ((!$('#msform').valid()) {
            return false;
        }*/
});//close document