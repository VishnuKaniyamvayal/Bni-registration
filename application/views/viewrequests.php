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
    <script src="http://cdn.tailwindcss.com"></script>

</head>

<body class=''>
    <div class='mt-5 mx-2'>
        <table class="table" id="viewtable">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Plan</th>
                    <th scope="col">date of submission</th>
                    <th scope="col">Accept Or Decline</th>
                    
                </tr>
            </thead>
            <tbody>


                <?php 
        $count = 0; 
         foreach($requests as $request) 
         {  $count+=1;
            ?><tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $request['name'];?></td>
                    <td><?php echo $request['email'];?></td>
                    <td><?php echo $request['phone'];?></td>
                    <td><?php echo $request['plan'];?></td>
                    <td><?php echo $request['date_of_submission'];?></td>
                    <td><a class='text-green-500 mx-4' href="<?php echo base_url('index.php/Verifyrequest/accept/'.$request['req_id'].'/'.$request['u_id']); ?>">ACCEPT    </a>
                    <a class='text-red-500' href="<?php echo base_url('index.php/Verifyrequest/decline/'.$request['req_id'].'/'.$request['u_id']); ?>">DECLINE</a></td>    
                </tr>
                <?php }  
         ?>


            </tbody>
        </table>
    </div>


</body>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jQuery.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jQuery_validate.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/ajax.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/datatables.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/datatable.min.js"></script>
<script>
$('#viewtable').DataTable();
</script>

</html>