<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div class="container mx-auto p-4">
        <div class="flex justify-center">
            <img src='<?php echo base_url('assets/member.png') ?>' alt="Profile Picture" class="w-32 h-32 rounded-full
            border-2 border-red-500">
        </div>
        <h1 class="text-center text-3xl font-bold mt-4 mb-2 text-red-500">
            <?php echo $user['username'] ?>
        </h1>
        <p class="text-center text-xl font-medium text-gray-600 mb-4">
            <?php echo $user['usertype'] ?>
        </p>
        <p class="text-center text-xl font-medium text-gray-600 mb-4">
            <?php echo $user['email'] ?>
        </p>
        <hr class="my-4 border-gray-300">
        <!-- show only if user have subscrpition -->
        <?php if($user['m_id'] != NULL ){ ?>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-red-500 rounded-lg text-white p-4">
                <h2 class="text-2xl font-bold mb-2">Gstn No</h2>
                <p class="text-xl font-medium"><?php echo $user[0]['gstn']; ?></p>
            </div>
            <div class="bg-red-500 rounded-lg text-white p-4">
                <h2 class="text-2xl font-bold mb-2">Address</h2>
                <p class="text-xl font-medium"><?php echo $user[0]['address']; ?></p>
            </div>
            <div class="bg-red-500 rounded-lg text-white p-4">
                <h2 class="text-2xl font-bold mb-2">Company</h2>
                <p class="text-xl font-medium"><?php echo $user[0]['company']; ?></p>
            </div>
            <div class="bg-red-500 rounded-lg text-white p-4">
                <h2 class="text-2xl font-bold mb-2">chapter</h2>
                <p class="text-xl font-medium"><?php echo $user[1]['chapter']; ?></p>
            </div>
            <div class="bg-red-500 rounded-lg text-white p-4">
                <h2 class="text-2xl font-bold mb-2">region</h2>
                <p class="text-xl font-medium"><?php echo $user[2]['region']; ?></p>
            </div>
            
        </div>
        <?php }; ?>
        <!--end of show only if user have subscrpition -->
        
        <?php if(($user['m_id'] == NULL) && ($user['request_sent']) == 0 ){ ?>
            <h1 class='text-center my-4 text-xl'>YOU ARE NOT A MEMBER SUBSCRIBE TO OUR PLAN TO REGISTER IN TRAINING EVENTS</h1>
            <div class='flex flex-row justify-evenly'>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-64">
                <div class="px-6 py-4 bg-red-500">
                    <h1 class="text-white font-bold text-2xl mb-2">1 Year</h1>
                    <p class="text-gray-200 text-lg">Save 6000</p>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 font-bold text-xl mb-2">Price: 54000 rs</p>
                    <p class="text-gray-600 text-base">You will have Access to register to any program available in the training list for 1 year</p>
                    <form action="<?php echo base_url('index.php/Subrequest') ?>" method="post">
                    <input type="text" value="1year" hidden name='plan'>
                    <input type='submit'  value='Buy subscription'
                        class="block mt-4 text-center bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full"></input>
                    </form>
                    </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-64">
                <div class="px-6 py-4 bg-red-500">
                    <h1 class="text-white font-bold text-2xl mb-2">1 Month</h1>
                    <p class="text-gray-200 text-lg">Save 500 rs</p>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 font-bold text-xl mb-2">Price: 4500 rs</p>
                    <p class="text-gray-600 text-base">You will have Access to register to any program available in the training list for 1 year</p>
                    <form action="<?php echo base_url('index.php/Subrequest') ?>" method="post">
                    <input type="text" value="1month" hidden name='plan'>
                    <input type='submit'  value='Buy subscription'
                        class="block mt-4 text-center bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full"></input>
                    </form>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-64">
                <div class="px-6 py-4 bg-red-500">
                    <h1 class="text-white font-bold text-2xl mb-2">1 Week</h1>
                    <p class="text-gray-200 text-lg">Save 0 rs</p>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 font-bold text-xl mb-2">Price: 1150 rs</p>
                    <p class="text-gray-600 text-base">You will have Access to register to any program available in the training list for 1 year</p>
                    <form action="<?php echo base_url('index.php/Subrequest') ?>" method="post">
                    <input type="text" value="1week" hidden name='plan'>
                    <input type='submit' n value='Buy subscription'
                        class="block mt-4 text-center bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full"></input>
                    </form>
                </div>
            </div>
            
        </div>
        <h1 class='text-center my-4 text-xl text-blue-500'>IF YOU HAVE ALREADY BOUGHT SUBSCRIPTION WAIT TILL THE ADMIN RESPONDS...</h1>
        <?php }; ?>

        <?php if(($user['request_sent']) == 1){ ?>
        <div class="max-w-sm mx-auto bg-white rounded-md shadow-md overflow-hidden">
            <div class="px-4 py-2 bg-red-500 text-white">
                <h2 class="font-bold text-lg text-center">Message</h2>
            </div>
            <div class="px-4 py-2">
                <p class="text-red-500 font-bold">Your request has been sent. Please wait for confirmation from the admin.</p>
             </div>
        </div>

        <?php }; ?>
    
    </div>

</body>

</html>