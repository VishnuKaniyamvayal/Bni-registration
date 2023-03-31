$(document).ready(function () {


    $('#venue').hide();
    $('#venueL').hide();



    //ajax for getting chapters 
    $('#region').on('change', function () {
        var r_id = $(this).val(); // get the r__id 
        console.log('work')
        $.ajax({
            type: 'POST',
            url: base_url("index.php/Loadchapter/index"),
            data: { r_id: r_id },
            success: function (response) {
                var chapters = JSON.parse(response);
                console.log("work")
                $('#chapter').empty();
                $('#chapter').append('<option selected value="" >Please select Chapter</option>');
                chapters.forEach(chapter => {
                    const option = $('<option>', { value: chapter.c_id, text: chapter.chapter });
                    $('#chapter').append(option);

                });
            

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
              }
        });
    });

    // ajax code for getting member details
    $('#chapter').on('change', function () {
        var c_id = $("#chapter").val(); // get the r__id 
        $.ajax({
            type: 'POST',
            url: base_url("index.php/Loadmember/index"), 
            data: { c_id: c_id },
            success: function (response) {
                var members = JSON.parse(response);
                $('#member').empty();
                $('#member').append('<option selected value="" >Please select Any member</option>');
                members.forEach(member => {
                    const option = $('<option>', { value: member.m_id, text: (member.name +"("+ member.email + ")" ) });
                    $('#member').append(option);

                });

            }
        });
    });
    $('#member').on('change', function () {
        var m_id = $("#member").val();
        $.ajax({
            type: 'POST',
            url: base_url("index.php/Loadmemberdetails/index"),
            data : {m_id:m_id} ,
            success: function (response) {
                var memberdetails = JSON.parse(response);
                //  $('#member').empty();
                //  $('#member').append('<option selected value="" >Please select Any member</option>');
                //  console.log(memberdetails[0].gstn)
                $('#gstn').val(memberdetails[0].gstn);
                $('#address').val(memberdetails[0].address);
                $('#company').val(memberdetails[0].company);
                // $('#phone').val(memberdetails[0].phone);
                // $('#email').val(memberdetails[0].email);
            }
        });
    });


    //ajax for venue
    $('#t_program').on('change', function () {
        $("#venue").show();
        $("#venueL").show();
        var t_id = $("#t_program").val();
        $.ajax({
            type: 'POST',
            url: base_url("index.php/Loadvenue/index"),
            data: { t_id: t_id },
            success: function (response) {
                console.log("working")
                var venue = JSON.parse(response);
                $('#venue').val(venue[0].venue)

            }
        });
    })

    //ajax for total
    $('#t_program').on('change', function () {
        $("#venue").show();
        $("#venueL").show();
        var t_id = $("#t_program").val();
        $.ajax({
            type: 'POST',
            url: base_url("index.php/Loadtotal/index"), 
            data: { t_id: t_id },
            success: function (response) {
                var total = JSON.parse(response);
                $('#total').val(total[0].total);

            }
        });
    })

    $('#reg_form').validate({
        rules: {
            region: {
                required: true,

            },
            chapter: {
                required: true,

            },
            t_program: {
                required: true,
            },
            venue: {
                required: true,

            },
            member: {
                required: true,

            },
            gstn: {
                required: true,

            },
            address: {
                required: true,

            },
            company: {
                required: true,
            },
            payment: {
                required: true,

            },
            

        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        
        }
        



    })




})