$(document).ready(function () {
        $('#username').alphanum();

        $('#signup_form').validate({
            rules: {
                username: {
                    required: true,
    
                },
                email: {
                    required: true,
                    email:true,
                    remote: {
                        url:  base_url("index.php/Loademail"),
                        type: "POST",
                        data: {
                            gstn: function () {
                                return $("#email").val();
                            }
                        }
                    }
    
                },
                phone: {
                    required: true,
                    number:true,
                    minlength:10,
                    maxlength:10
    
                },
                
                password: {
                    required: true,
                    minlength:8,
    
                },
                confirm_password: {
                    required: true,
                    equalTo:'#password',
                    
    
                },
    
    
            },
            messages:{
                email:{
                    required:"Please enter your Email",
                    remote:"Email already exists"
                },
                password:{
                    required:"Please Enter password",
                    minlength:"Password should contain atleast 8 characters"
                },
                phone:{
                    required:"Please Enter Phone number",
                    minlength:"Phone number should contain atleast 10 numbers",
                    maxlength:"Phone number should contain atleast 10 numbers"
                },
                confirm_password:{
                    required:"Confirm your password",
                    equalTo:"Enter the same password"
                }

            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);            
            }

        });







})