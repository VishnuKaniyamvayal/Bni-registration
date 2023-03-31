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
    <a href="<?php echo base_url(); ?>index.php/Exportmemberdata"
        class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded float-right no-underline mt-9">Export</a>
    <div class='mt-5 mx-2'>
        <table class="table" id="viewtable">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Region</th>
                    <th scope="col">Chapter</th>
                    <th scope="col">Member_name</th>
                    <th scope="col">Gstn</th>
                    <th scope="col">Address</th>
                    <th scope="col">Company</th>
                    <th scope="col">email</th>
                    <th scope="col">Phone</th>

                </tr>
            </thead>
            <tbody>


                <?php 
        $count = 0; 
         foreach($details as $detail) 
         {  $count+=1;
            ?><tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $detail['t_program'];?></td>
                    <td><?php echo $detail[''];?></td>
                    <td><?php echo $detail['Program Name'];?></td>
                    </td>
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