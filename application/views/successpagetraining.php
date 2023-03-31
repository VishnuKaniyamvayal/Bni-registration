<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upload Success</title>
    <script src="http://cdn.tailwindcss.com"></script>

<body>
    <div class="success-container">
        <div class="success-circle">
            <span class="success-checkmark">
                <span class="success-checkmark-stem"></span>
                <span class="success-checkmark-kick"></span>
            </span>
        </div>
        <h1 class="success-message">Data Uploaded</h1>
    </div>
    <div class="items-center  flex  justify-center space-x-5">
        <a href=<?php echo base_url('index.php/Loadtrainingview');?>
            class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded float-right no-underline mt-9">View All
            members</a>
        <a href=<?php echo base_url('index.php/Addtraining');?>
            class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded float-right no-underline mt-9">Add more</a>
    </div>
</body>

<style>
body {
    background-color: #f1f1f1;
}

.success-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
}

.success-circle {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: #4BB543;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: scale-up 0.5s ease-in-out;
}

.success-checkmark {
    width: 60px;
    height: 90px;
    border-radius: 50%;
    position: relative;
    transform: rotate(45deg);
    bottom: 16px;
    left: 14px;
}

.success-checkmark-stem {
    position: absolute;
    width: 3px;
    height: 60px;
    background-color: #fff;
    top: 27px;
    left: 34px;
    animation: stem-extend 0.3s ease-out 0.5s forwards;
}

.success-checkmark-kick {
    position: absolute;
    width: 3px;
    height: 30px;
    background-color: #fff;
    rotate: 90deg;
    top: 70px;
    left: 20px;
    animation: kick-extend 0.3s ease-in-out 0.8s forwards;
}

.success-message {
    font-size: 36px;
    color: #333;
    margin-top: 30px;
    animation: fade-in 0.5s ease-in-out 1s forwards;
}

@keyframes scale-up {
    0% {
        transform: scale(0);
    }

    100% {
        transform: scale(1);
    }
}

@keyframes stem-extend {
    0% {
        height: 0;
    }

    100% {
        height: 60px;
    }
}

@keyframes kick-extend {
    0% {
        height: 0;
    }

    100% {
        height: 30px;
    }
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}
</style>

</html>