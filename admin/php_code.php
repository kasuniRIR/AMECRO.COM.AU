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
            $temp = explode(".", $_FILES["img"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES["img"]["tmp_name"], "upload/medical/" . $newfilename);
            $qry = "INSERT INTO medical (prdName, prdFeature, img, tableTop, elevationTable, elevationChair, maxLoad, elevationPhoropterarm, phoropterRotation, tableRotation, chargingPort, topLamp, fuse, voltage, inputPower, tableWeight, chairWeight) VALUES ('$prdName', '$prdFeature', '$newfilename', '$tableTop', '$elevationTable', '$elevationChair', '$maxLoad', '$elevationPhoropterarm','$phoropterRotation', '$tableRotation', '$chargingPort', '$topLamp', '$fuse','$voltage', '$inputPower', '$tableWeight', '$chairWeight')"; 
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
        $tableWeight= $_POST['tableWeight'];
		$chairWeight= $_POST['chairWeight'];
		
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