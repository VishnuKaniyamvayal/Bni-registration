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
    </style>
    <link rel="stylesheet" href=<?php echo base_url('styles/bootstrap.css') ?>>
</head>

<body class="">
    <div class="mx-auto mt-[50px] border w-[500px]">
        <h1 class="text-[20px] text-center mt-4 font-bold text-gray-400">Login</h1>
        <form action=<?php echo base_url("index.php/Login/userLogin")?> method="POST" id="login_form">
                <div class="flex flex-col items-center w-full h-[300px] justify-center  mb-[-20px]">
                    <div class="form-outline ">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control max-w-[300px]" name='email'/>
                    </div>
                    <div class="form-outline ">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control max-w-[300px]" name='password'/>
                    </div>
                </div>
                <!-- Error message  -->
                <?php if($this->session->flashdata('login_error')) {?>
                <p class='text-center text-red-500 mb-4 mt-[-50px] bg-red-100 py-4'><?php echo ($this->session->flashdata('login_error'))?></p>
                <?php }?>
                <!-- Submit button -->
                <div class="flex justify-center">
                <input type="submit" value="Login" class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded mx-auto">
                </div>

                <!-- Register buttons -->
                <div class="text-center mt-2">
                    <p>Not a member? <a href="<?php echo base_url("index.php/Signup")?>">Register</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jquery.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jqueryvalidate.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/alphanum.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/login_script.js"></script>

</html>