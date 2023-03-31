<?php
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
    <a href="<?php echo base_url(); ?>index.php/Exportdata"
        class="text-white bg-[#CF2030] px-[15px] py-[8px] rounded float-right no-underline mt-9" >Export</a>
    <div class='mt-5 mx-2'>
        <table class="table " id="viewtable">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Date of Register</th>
                    <th scope="col">Region</th>
                    <th scope="col">Chapter</th>
                    <th scope="col">Training_program</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Member Name</th>
                    <th scope="col">Gstn</th>
                    <th scope="col">Address</th>
                    <th scope="col">Company</th>
                    <th scope="col">Total </th>
                    <th scope="col">Payment</th>

                </tr>
            </thead>
            <tbody>


                <?php  
         foreach ($details as $detail) 
         {  
            ?><tr>
                    <td><?php echo $detail['d_id'];?></td>
                    <td><?php echo $detail['date_of_register'];?></td>
                    <td><?php echo $detail['region'];?></td>
                    <td><?php echo $detail['chapter'];?></td>
                    <td><?php echo $detail['t_program'];?></td>
                    <td><?php echo $detail['venue'];?></td>
                    <td><?php echo $detail['member'];?></td>
                    <td><?php echo $detail['gstn'];?></td>
                    <td><?php echo $detail['address'];?></td>
                    <td><?php echo $detail['company'];?></td>
                    <td><?php echo $detail['total'];?></td>
                    <td><?php echo $detail['payment'];?></td>
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