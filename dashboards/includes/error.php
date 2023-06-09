<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/styless.css" rel="stylesheet">

</head>
<body>
<style>
    p{
        text-align: center;
    }
</style>
<?php if(count($error_message) > 0):  ?>
<?php foreach ($error_message as $errors): ?>
    <p class="alert alert-danger"> <?php echo "$errors"; ?> </p>
<?php endforeach ?>
<?php endif ?>


<?php if(count($success_message) > 0):  ?>
<?php foreach ($success_message as $success): ?>
    <p class=" alert alert-success"> <?php echo "$success"; ?> </p>
<?php endforeach ?>
<?php endif ?>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>