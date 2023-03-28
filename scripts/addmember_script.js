$(document).ready(function () {

    // function base_url(string){
    //     return "http://localhost/bni/" + string;
    //  }

     // get the r__id 
        // $.ajax({
        //     type: 'POST',
        //     url: base_url("index.php/Loadgstn"),
        //     success: function (response) {
        //         var temp = JSON.parse(response)
        //     }
            
        // });
        
        // var gstn = $('#array').val();
        // console.log(gstn)
        $('#company').alphanum();
        $('#name').alpha();
        $('#phone').numeric();
        $('#add_form').validate({
            rules: {
                region: {
                    required: true,
    
                },
                chapter: {
                    required: true,
    
                },
                
                name: {
                    required: true,
    
                },
                gstn: {
                    required: true,
                    remote: {
                        url:  base_url("index.php/Loadgstn"),
                        type: "POST",
                        data: {
                            gstn: function () {
                                return $("#gstn").val();
                            }
                        }
                    }
    
                },
                address: {
                    required: true,
    
                },
                company: {
                    required: true,
                },
                email: {
                    required: true,
                    email:true,
                    remote: {
                        url:  base_url("index.php/Loademail"),
                        type: "POST",
                        data: {
                            email: function () {
                                return $("#email").val();
                            }
                        }
                    }
                },
                phone: {
                    required: true,
                    number:true,
                    remote: {
                        url:  base_url("index.php/Loadphone"),
                        type: "POST",
                        data: {
                            phone: function () {
                                return $("#phone").val();
                            }
                        }
                    }
                }
    
    
            },
            messages:{
                gstn:{
                    remote:"GSTN already exists"
                },
                email:{
                    remote:"Email already exists"
                },
                phone:{
                    remote:"Phone number already exists"
                }
            },
            errorPlacement: function(error, element) {
                error.insertBefore(element);            
            }

        });
        
    

    

    $("#name").change(function () {
		var val = $("#name").val();
		var txt = val.charAt(0).toUpperCase();
        var rtext = val.slice(1,val.length);
        var ltext = rtext.toLowerCase();
        var main_text = txt + ltext;
		$("#name").val(main_text);
	})
    
    



    //ajax for getting chapters 
    $('#region').on('change', function () {
        var r_id = $(this).val(); // get the r__id 
        $.ajax({
            type: 'POST',
            url: base_url("index.php/Loadchapter"), 
            data: { r_id: r_id },
            success: function (response) {
                console.log(response)
                var chapters = JSON.parse(response);
                console.log(chapters);
                $('#chapter').empty();
                $('#chapter').append('<option selected value="" >Please select Chapter</option>');
                chapters.forEach(chapter => {
                    const option = $('<option>', { value: chapter.c_id, text: chapter.chapter });
                    $('#chapter').append(option);
                    });

                },
            
        });
    });







})