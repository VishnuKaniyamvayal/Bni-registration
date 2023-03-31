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
        $('#total').numeric();
        $('#t_program').alpha({
            allow              : " ' ",
            allowSpace: false,
        });
        $('#training_form').validate({
            rules: {
                t_program: {
                    required: true,
    
                },
                total: {
                    required: true,
    
                },
                
                venue: {
                    required: true,
    
                },
            },            
            messages:{
                t_program:{
                    required:"Please enter Training name"
                },
                total:{
                    required:"Please enter total cost"
                },
                venue:{
                    required:"Please enter a Venue"
                },
            },
            errorPlacement: function(error, element) 
            {
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