<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search Your data</title>
  <link rel="stylesheet" href=<?php echo  base_url('styles/bootstrap.css') ?>>
	<link rel="stylesheet" href=<?php echo  base_url('styles/datatables.css') ?>>

</head>
<body>

<table class="table " id="viewtable">
  <thead>
    <tr>
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

</body>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jQuery.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/jQuery_validate.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/ajax.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/datatables.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/script.js"></script>
<script>
  $('#viewtable').DataTable();
</script>
</html>