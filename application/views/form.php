<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORTUNE BUSINESS SOLUTIONS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    label.error {
        color: red;
        font-size: 14px;
    }
    input[readonly] {
        background-color: #eee;
    }
    </style>
    <link rel="stylesheet" href=<?php echo base_url('styles/style.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('styles/bootstrap.css') ?>>
</head>

<body>
    <div class="border-y-[1px]  mt-10 border-black w-[600px] mx-auto">
        <h1 class="font-thin  text-center text-2xl font-bold">ALL TRAINING PAYMENTS</h1>
    </div>

    <div class="w-[70%] mx-auto  border rounded-md border-gray-100">
        <form action=<?php echo base_url('index.php/RegisterData/')?> id="reg_form" method="POST">
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
                            <!-- END of Iterating Regions -->
                        </select>
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="chapter">BNI Chapter: </label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <select class="form-select max-w-[300px]" id="chapter" name='chapter'>
                            <option selected value="">Please select Chapter</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- 2nd row -->
            <div class='grid grid-cols-2  mx-auto mt-10 justify-between px-[10px]'>
                <div class="flex flex-row space-x-8 items-center justify-between pr-[10px]">
                    <label for="t_program">Training Program: </label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <select class="form-select max-w-[300px]" id='t_program' name='t_program'>
                            <option value="" selected>Select training Program</option>
                        <!-- Iterating Regions -->
                        <?php 
                     foreach ($initial[1] as $t_program)  
                    { ?>
                            <option value="<?php echo $t_program['t_id'];?>">
                                <?php echo $t_program['t_program'];?>
                            </option>

                            <?php }  
                      ?>
                            <!-- END of Iterating Regions -->
                        </select>
                    </div>
                </div>

                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] mr-[-10px]">
                    <label id="venueL" for="venue">Venue</label>

                    <input readonly type='text' class="form-control max-w-[300px]" id='venue' name='venue' />

                </div>


            </div>
            <!-- 3rd Row  -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="member">Member Name </label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <select class="form-select max-w-[300px]" id="member" name='member'>
                            <option selected value="">Select Member</option>
                        </select>
                    </div>

                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] mt-1 ">
                    <label for="gstn">GSTN No:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' class="form-control max-w-[300px] " id='gstn' name='gstn' readonly />
                        <p class="text-xs">If GSTN Number is not available. Please Enter <b>NILGST</b> </p>
                    </div>
                </div>
            </div>
            <!-- 4th row -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="address">Address:</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' readonly class="form-control max-w-[300px]" id='address' name='address' />
                    </div>
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px] ">
                    <label for="company">Company</label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <input type='text' readonly class="form-control max-w-[300px]" id='company' name='company' />
                    </div>
                </div>
            </div>
            <!-- 4th row -->
            <!-- <div class='grid grid-cols-2  mx-auto mt-10'>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
					<label for="email">Email:</label>
					<div class="flex flex-col mt-4 w-[300px]">
					<input type='text' readonly class="form-control max-w-[300px]" id='email' name='email' />
					</div>
				</div>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px] ">
					<label for="Phone">Phone</label>
					<div class="flex flex-col mt-4 w-[300px]">
					<input type='text' readonly class="form-control max-w-[300px]" id='Phone' name='Phone' />
					</div>
				</div>
			</div> -->
            <!-- 5th row -->
            <div class='grid grid-cols-2  mx-auto mt-10'>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="total">Total to be paid<br>(GST included)</label>
                    <input readonly value="0.00" type='text' class="form-control max-w-[300px]" id='total'
                        name='total' />
                </div>
                <div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
                    <label for="payment">Payment type </label>
                    <div class="flex flex-col mt-4 w-[300px]">
                        <select class="form-select max-w-[300px]" id="payment" name='payment'>
                            <option selected value=''>Select Payment Type </option>
                            <option value="Credit_debit_netbanking">CREDIT / DEBIT / NETBANKING</option>
                            <option value="insta_mojo">Insta Mojo(Convenience fee applicable)</option>
                        </select>
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
<script>
function base_url(string) {
    return "<?php echo base_url(); ?>" + string;
}
</script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/form_script.js"></script>

</html>