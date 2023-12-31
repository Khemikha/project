<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
include('./controller/con_db.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/sb-1.4.2/sp-2.1.2/datatables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/style.css">

</head>

<body>
    <?php
    if (empty($_GET['page']) || !ctype_alnum(str_replace(['-', '_'], '', $_GET['page'])) || !file_exists("page/{$_GET['page']}.php")) {
        die(header('Location: ?page=home'));
    }
    require_once "page/{$_GET['page']}.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/sb-1.4.2/sp-2.1.2/datatables.min.js"></script>

</body>

</html>