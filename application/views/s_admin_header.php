<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search Your data</title>
    <link rel="stylesheet" href=<?php echo  base_url('styles/bootstrap.css') ?>>
    <link rel="stylesheet" href="<?php echo  base_url() ?>styles/datatables.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="h-[90px] bg-[#CF2030] flex flex-row justify-between">
        <div class="bg-white  w-[200px] ml-[130px] flex h-full flex items-center justify-center ">
            <img class="h-[70px]" src="<?php echo  base_url('assets/logo.png') ?>" alt="">
        </div>
        <div>
            <ul class="flex pr-[120px] pt-4">
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium" href="">HOME</a></li>
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium" href="<?php echo base_url('index.php/Addtraining')?>">ADD TRAINING</a></li>
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium"
                        href=<?php echo base_url('index.php/Addmember')?>>ADD MEMBER</a></li>
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium"
                        href="<?php echo base_url('index.php/Loadmemberview')?>">VIEW MEMBERS</a></li>
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium"
                        href="<?php echo base_url('index.php/Eventregister')?>">EVENT REGISTER</a>
                </li>
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium"
                        href="<?php echo base_url('index.php/Viewdata')?>"> EVENTS REGISTERED </a></li>
                <li><a class="text-white no-underline mx-2 text-[15px] hover:font-medium" href="<?php echo base_url('index.php/Logout')?>">LOGOUT</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>