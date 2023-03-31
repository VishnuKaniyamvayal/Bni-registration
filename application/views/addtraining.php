<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add training</title>
    <link rel="stylesheet" href=<?php echo base_url('styles/bootstrap.css') ?>>
    <link rel="stylesheet" href="<?php echo  base_url() ?>styles/datatables.css">
    <style>
    label.error {
        color: red;
        font-size: 14px;
    }
    </style>
</head>

<body>

    <div class="border-y-[1px]  mt-10 border-black w-[600px] mx-auto">
        <h1 class="font-thin  text-center text-2xl font-bold">ADD TRAINING</h1>
    </div>

    <div class="w-[70%] mx-auto  border rounded-md border-gray-100">
        <div class="w-full flex justify-end mt-[-20px] mb-[-50px]">
        </div>
        <form action=<?php echo base_url("index.php/Registertraining")?> id="training_form" method="POST">
                
            <!-- 3th row -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] mt-10">
                    <label for="t_program">Program name</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='t_program' name='t_program' />
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]  mt-10">
                    <label for="total">Cost of Program:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='total' name='total' />
                    </div>
                </div>
            </div>
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] mt-10">
                    <label for="venue">Venue</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='venue' name='venue' />
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-10 mb-[50px]">
                <input type="Submit" value="Register" class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded mx-auto"
                    id='reg_button'>
            </div>
        </form>
    </div>
</body>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jquery.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/ajax.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jqueryvalidate.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/alphanum.min.js"></script>
<script>
function base_url(string) {
    return "<?php echo base_url(); ?>" + string;
}
</script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/addtraining_script.js"></script>

</html>