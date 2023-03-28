<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upload Your FILE!!</title>
    <link rel="stylesheet" href=<?php echo base_url('styles/bootstrap.css') ?>>
    <link rel="stylesheet" href="<?php echo  base_url() ?>styles/datatables.css">
    <script src="https://cdn.tailwindcss.com"></script>

<style>
        label.error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="flex border-y-[1px]  mt-10 border-black w-[600px] mx-auto">
        <h1 class="font-thin  text-center text-2xl font-bold">UPLOAD YOUR EXCEL FILE</h1>
    </div>

    <div class="w-[70%] mx-auto  border rounded-md border-gray-100">
    <a class="no-underline text-white bg-[#CF2030] px-[15px] py-[8px] rounded m-7 float-right" href="<?php echo base_url("assets/add_member_template.xlsx")?>">Download template</a>
        <form enctype='multipart/form-data' action=<?php echo base_url("index.php/Registermember/upload")?> id="add_form" method="POST" >
            <div class=" w-[300px] m-8">
                <input type="file" class="form-control" name="member_details" id="member_details" accept=".xlsx , .xls">
                <small id="fileHelp" class="form-text text-muted"> Excel (.xls) file only</small>
            </div>
            <input type="submit" value='Import' class=" text-white bg-[#CF2030] px-[15px] py-[8px] rounded m-7">
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
<script type='text/javascript' src="<?php echo base_url(); ?>scripts/addmember_script.js"></script>

</html>