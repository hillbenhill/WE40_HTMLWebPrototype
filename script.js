// JavaScript Document
/*Author: Ben Hill
Assigment : WE4.0 PHP Web App Assigment, Digital Skills Academy
  Student Id = D11128483
  Date : 20016/04/22
Ref: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            user_name: "please enter user name",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            user_email: "please enter a valid email address",
			cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();// form id = register-form
				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()// check boolean value for email befor function call if false cancel the request
				{	
					$("#error").fadeOut();
					// spinner on button to show user system activity
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)// data sent to server run if new user 
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									// spinner animation for the signup process
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
									setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});