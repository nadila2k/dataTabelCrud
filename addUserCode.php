<?php include 'config/db.php';?>

<?PHP

    $aResponse = [
        'status' => false,
        'message' => 'Data not saved!',
        'data' => []
    ];

    if (isset($_POST)) {
        $data = file_get_contents("php://input");
        $userData = json_decode($data);

        $name =  $userData->name;
        $email =  $userData->email;
        $mobile =  $userData->mobile;
        $city =  $userData->city;

        $sql = "INSERT INTO userdata SET name='$name', email='$email', mobile='$mobile', city='$city'";
        $res = mysqli_query($conn,$sql);
        if ($res == true) {
            $aResponse['status'] = true;
            $aResponse['message'] = 'Data saved';
            $aResponse['data'] = true;
        } else {
            $aResponse['status'] = false;
            $aResponse['message'] = 'Data not saved';
            $aResponse['data'] = [];
        }
    }

    header('Content-Type: application/json');
    echo json_encode($aResponse);
?>
