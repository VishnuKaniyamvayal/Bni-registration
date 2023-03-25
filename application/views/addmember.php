<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search Your data</title>
    <link rel="stylesheet" href=<?php echo  base_url('styles/bootstrap.css') ?>>
	<link rel="stylesheet" href="<?php echo  base_url() ?>styles/datatables.css">
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
					<select class="form-select max-w-[300px]" id='region' name='region'>
						<option value="" selected>Select region</option>
						<!-- Iterating Regions -->
						<!-- <?php 
                     foreach ($regions as $region)  
                    { ?>
						<option value="<?php echo $region['r_id'];?>">
							<?php echo $region['region'];?>
						</option>

						<?php }  
                      ?> -->
						<!-- END of Iterating Regions -->
					</select>
				</div>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
					<label for="chapter">BNI Chapter: </label>
					<select class="form-select max-w-[300px]" id="chapter" name='chapter'>
						<option selected>Please select Chapter</option>
					</select>
				</div>
            </div>
				<!-- 2rd Row  -->
			<div class='grid grid-cols-2  mx-auto mt-10'>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
					<label for="member">Member Name</label>
					<input type='text' class="form-control max-w-[300px]" id='name' name='name' />
				</div>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px] mt-1 ">
					<label for="gstn">GSTN No:</label>
					<div class="flex flex-col mt-1">
						<input type='text' class="form-control max-w-[300px] " id='gstn' name='gstn' />
						<p class="text-xs">If GSTN Number is not available. Please Enter <b>NILGST</b> </p>
					</div>
				</div>
			</div>
			<!-- 3th row -->
			<div class='grid grid-cols-2  mx-auto mt-10'>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px]">
					<label for="address">Address:</label>
					<input type='text' readonly class="form-control max-w-[300px]" id='address' name='address' />
				</div>
				<div class="flex flex-row space-x-8 items-center justify-between px-[10px] ">
					<label for="company">Company</label>
					<input type='text' readonly class="form-control max-w-[300px]" id='company' name='company' />
				</div>
			</div>
			<div class="flex justify-center mt-10 mb-[50px]">
				<input type="Submit" value="Register" class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded mx-auto"
					id='reg_button'>
			</div>
		</form>
	</div>
</body>
</html>