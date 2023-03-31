$(document).ready(function () {
        $('#username').alphanum();

        $('#login_form').validate({
            rules: {
                username: {
                    required: true,
    
                },
                email: {
                    required: true,
                    email:true,
    
                },
                
                password: {
                    required: true,
                    minlength:8,
    
                },
                
    
            },
            messages:{
                email:{
                    required:"Please enter your Email",
                },
                password:{
                    required:"Please Enter password",
                    minlength:"Password should contain atleast 8 characters"
                },

            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);            
            }

        });

        $("#email").change(function () {
            var val = $("#email").val();
            var txt = val.toLowerCase();
            $("#email").val(txt);
        })







})