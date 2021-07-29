<?php include ('../database/connection.php');

	// initialize variables
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
        $tableWeight= $_POST['tableWeight'];
		$chairWeight= $_POST['chairWeight'];
		
         if(file_exists("upload/medical/".$_FILES["img"]["name"]))
        {
           $store = $_FILES["img"]["name"];
           $_SESSION['status'] = "Image already exists. '.$store.'";
     
        }else{
            // move_uploaded_file($_FILES["img"]["tmp_name"],"upload/medical/".$_FILES["img"]["name"]);
            $temp = explode(".", $_FILES["img"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES["img"]["tmp_name"], "upload/medical/" . $newfilename);
            $qry = "INSERT INTO medical (prdName, prdFeature, img, tableTop, elevationTable, elevationChair, maxLoad, elevationPhoropterarm, phoropterRotation, tableRotation, chargingPort, topLamp, fuse, voltage, inputPower, tableWeight, chairWeight) VALUES ('$prdName', '$prdFeature', '$newfilename', '$tableTop', '$elevationTable', '$elevationChair', '$maxLoad', '$elevationPhoropterarm','$phoropterRotation', '$tableRotation', '$chargingPort', '$topLamp', '$fuse','$voltage', '$inputPower', '$tableWeight', '$chairWeight')"; 
            $run = mysqli_query($db, $qry);
            $_SESSION['message'] = "Added successfully"; 
         }
        }
		
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $model = $_POST['model'];
		$year = $_POST['year'];
        $engine = $_POST['engine'];
		$rental = $_POST['rental'];
        $week = $_POST['week'];
        $month = $_POST['month'];
        $passenger = $_POST['passenger'];
        $luggage = $_POST['luggage'];
		$type = $_POST['type'];
        $transmission = $_POST['transmission'];
		$fuel = $_POST['fuel'];
        $door = $_POST['door'];
        $musicOn = $_POST['musicOn'];
        $ac = $_POST['ac'];
        $ideal = $_POST['ideal'];
        $availability = $_POST['availability'];
		
        mysqli_query($db, "UPDATE car SET model='$model', year='$year', engine='$engine', rental='$rental', week='$week', month='$month', passenger='$passenger' , luggage='$luggage', type='$type', transmission='$transmission', fuel='$fuel', door='$door' , musicOn='$musicOn', ac='$ac', ideal='$ideal', availability = '$availability' WHERE id=$id");
        $_SESSION['message'] = "Updated successfully!"; 
        header('location: viewDashboard.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM car WHERE id=$id");
        $_SESSION['message'] = "Deleted successfully!"; 
        header('location: viewDashboard.php');
    }