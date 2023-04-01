<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search Your data</title>
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
        <h1 class="font-thin  text-center text-2xl font-bold">ADD MEMBER</h1>
    </div>

    <div class="w-[70%] mx-auto  border rounded-md border-gray-100">
        <div class="w-full flex justify-end mt-[-20px] mb-[-50px]">
            <a class=" text-white bg-[#CF2030] px-[15px] py-[8px] rounded m-7 no-underline"
                href=<?php echo base_url("index.php/Addmember/upload"); ?>>Import using excel</a>
        </div>
        <form action=<?php echo base_url("index.php/Registermember")?> id="add_form" method="POST">
            <input type="text" value='' name="array" id="array" hidden>
            <div class='grid grid-cols-2  mx-auto mt-10 '>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="region">BNI Region:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <select class="form-select max-w-[300px]" id='region' name='region'>
                            <option value="" selected>Select region</option>
                            <!-- Iterating Regions -->
                            <?php 
                     foreach ($initial[0] as $region)  
                    { ?>
                            <option value="<?php echo $region['r_id'];?>">
                                <?php echo $region['region'];?>
                            </option>

                            <?php }  
                      ?>
                        </select>
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="chapter">BNI Chapter:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <select class="form-select max-w-[300px]" id="chapter" name='chapter'>
                            <option selected value=''>Please select Chapter</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- 2rd Row  -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="name">Member Name</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='name' name='name' value="<?php echo $initial['users'][0]['username']?>"/>
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] mt-1 ">
                    <label for="gstn">GSTN No:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px] " id='gstn' name='gstn' />
                        <p class="text-xs mt-1">If GSTN Number is not available. Please Enter <b>NILGST</b> </p>
                    </div>
                </div>
            </div>
            <!-- 3th row -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="address">Address:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='address' name='address' />
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] ">
                    <label for="company">Company</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='company' name='company' />
                    </div>
                </div>
            </div>
            <!-- 4th row -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="email">Email:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='email' name='email' value="<?php echo $initial['users'][0]['email']?>"/>
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] ">
                    <label for="phone">Phone:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px]" id='phone' name='phone'value=<?php echo $initial['users'][0]['phone']?> />
                    </div>
                </div>
            </div>
            <input type="text" hidden name='u_id' value=<?php echo $initial['u_id']?> id='u_id'>
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
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/addmember_script.js"></script>

</html>