<?php include('../database/connection.php');

// initialize variables - Medical Furniture
$prdName    = "";
$prdFeature = "";
$img        = [];
$tableTop   = "";
$elevationTable = "";
$elevationChair = "";
$maxLoad    = "";
$elevationPhoropterarm = "";
$phoropterRotation = "";
$tableRotation  = "";
$chargingPort   = "";
$topLamp        = "";
$fuse           = "";
$voltage        = "";
$inputPower     = "";
$tableWeight    = "";
$chairWeight    = "";
$type = "";

if (isset($_POST['medical'])) {
    $prdName = $_POST['prdName'];
    $prdFeature = $_POST['prdFeature'];
    $img = $_FILES['img']['name'];
    $tableTop = $_POST['tableTop'];
    $elevationTable = $_POST['elevationTable'];
    $elevationChair = $_POST['elevationChair'];
    $maxLoad        = $_POST['maxLoad'];
    $elevationPhoropterarm = $_POST['elevationPhoropterarm'];
    $phoropterRotation  = $_POST['phoropterRotation'];
    $tableRotation  = $_POST['tableRotation'];
    $chargingPort   = $_POST['chargingPort'];
    $topLamp    = $_POST['topLamp'];
    $fuse       = $_POST['fuse'];
    $voltage    = $_POST['voltage'];
    $inputPower = $_POST['inputPower'];
    $tableWeight = $_POST['tableWeight'];
    $chairWeight = $_POST['chairWeight'];
    $type = "medical";

    if (file_exists("upload/medical/" . $_FILES["img"]["name"])) {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/medical/" . $newfilename);
        $qry = "INSERT INTO medical (prdName, prdFeature, img, tableTop, elevationTable, elevationChair, maxLoad, elevationPhoropterarm, phoropterRotation, tableRotation, chargingPort, topLamp, fuse, voltage, inputPower, tableWeight, chairWeight, type) VALUES ('$prdName', '$prdFeature', '$newfilename', '$tableTop', '$elevationTable', '$elevationChair', '$maxLoad', '$elevationPhoropterarm','$phoropterRotation', '$tableRotation', '$chargingPort', '$topLamp', '$fuse','$voltage', '$inputPower', '$tableWeight', '$chairWeight', '$type')";
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully";
    }
}

if (isset($_POST['m_update'])) {
    $id = $_POST['m_id'];
    $prdName = $_POST['prdName'];
    $prdFeature = $_POST['prdFeature'];
    $tableTop = $_POST['tableTop'];
    $elevationTable = $_POST['elevationTable'];
    $elevationChair = $_POST['elevationChair'];
    $maxLoad        = $_POST['maxLoad'];
    $elevationPhoropterarm = $_POST['elevationPhoropterarm'];
    $phoropterRotation  = $_POST['phoropterRotation'];
    $tableRotation  = $_POST['tableRotation'];
    $chargingPort   = $_POST['chargingPort'];
    $topLamp    = $_POST['topLamp'];
    $fuse       = $_POST['fuse'];
    $voltage    = $_POST['voltage'];
    $inputPower = $_POST['inputPower'];
    $tableWeight = $_POST['tableWeight'];
    $chairWeight = $_POST['chairWeight'];

    mysqli_query($db, "UPDATE medical SET prdName = '$prdName', prdFeature = '$prdFeature', tableTop = '$tableTop', elevationTable = '$elevationTable', elevationChair = '$elevationChair', maxLoad = '$maxLoad', elevationPhoropterarm = '$elevationPhoropterarm', phoropterRotation = '$phoropterRotation', tableRotation = '$tableRotation', chargingPort = '$chargingPort', topLamp = '$topLamp', fuse = '$fuse', voltage = '$voltage', inputPower = '$inputPower', tableWeight = '$tableWeight', chairWeight = '$chairWeight'  WHERE m_id=$id");
    $_SESSION['message'] = "Updated successfully!";
    header('location: viewMedicalDashboard.php');
}

if (isset($_GET['m_del'])) {
    $id = $_GET['m_del'];
    mysqli_query($db, "DELETE FROM medical WHERE m_id=$id");
    $_SESSION['message'] = "Deleted successfully!";
    header('location: viewMedicalDashboard.php');
}

// initialize variables - Env Solutions
$e_name  = "";
$e_model = "";
$e_size  = "";
$img   = [];
$type = "";

if (isset($_POST['environmental'])) {
    $e_name = $_POST['e_name'];
    $e_model = $_POST['e_model'];
    $e_size = $_POST['e_size'];
    $img = $_FILES['img']['name'];
    $type = "env";

    if (file_exists("upload/environmental/" . $_FILES["img"]["name"])) {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/environmental/" . $newfilename);
        $qry = "INSERT INTO environmental (e_name, e_model, e_size, img, type) VALUES ('$e_name', '$e_model', '$e_size', '$newfilename', '$type')";
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully";
    }
}

if (isset($_POST['e_update'])) {
    $id = $_POST['e_id'];
    $e_name = $_POST['e_name'];
    $e_model = $_POST['e_model'];
    $e_size = $_POST['e_size'];

    mysqli_query($db, "UPDATE environmental SET e_name = '$e_name', e_model = '$e_model', e_size = '$e_size'  WHERE e_id=$id");
    $_SESSION['message'] = "Updated successfully!";
    header('location: viewEnvironmentalDashboard.php');
}

if (isset($_GET['e_del'])) {
    $id = $_GET['e_del'];
    mysqli_query($db, "DELETE FROM environmental WHERE e_id=$id");
    $_SESSION['message'] = "Deleted successfully!";
    header('location: viewEnvironmentalDashboard.php');
}

// initialize variables - Kindergarten Solutions
$k_name  = "";
$k_model = "";
$k_size  = "";
$img   = [];
$type = "";

if (isset($_POST['kindergarten'])) {
    $k_name = $_POST['k_name'];
    $k_model = $_POST['k_model'];
    $k_size = $_POST['k_size'];
    $img = $_FILES['img']['name'];
    $type = "kindergarten";

    if (file_exists("upload/kindergarten/" . $_FILES["img"]["name"])) {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/kindergarten/" . $newfilename);
        $qry = "INSERT INTO kindergarten (k_name, k_model, k_size, img, type) VALUES ('$k_name', '$k_model', '$k_size', '$newfilename', '$type')";
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully";
    }
}

if (isset($_POST['k_update'])) {
    $id = $_POST['k_id'];
    $k_name = $_POST['k_name'];
    $k_model = $_POST['k_model'];
    $k_size = $_POST['k_size'];

    mysqli_query($db, "UPDATE kindergarten SET k_name = '$k_name', k_model = '$k_model', k_size = '$k_size'  WHERE k_id=$id");
    $_SESSION['message'] = "Updated successfully!";
    header('location: viewKindergartenDashboard.php');
}

if (isset($_GET['k_del'])) {
    $id = $_GET['k_del'];
    mysqli_query($db, "DELETE FROM kindergarten WHERE k_id=$id");
    $_SESSION['message'] = "Deleted successfully!";
    header('location: viewKindergartenDashboard.php');
}
