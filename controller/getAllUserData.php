<?php include "./../config/db.php";?>
<?php 
    function index($conn) {

        $aUserData = [];

        // 1. Query all data from db
        $sql = "SELECT * FROM userdata"; 
        $res = mysqli_query($conn,$sql);
        while ($rows=mysqli_fetch_assoc($res)) {
            $aUserData[] = $rows;
        }

        // 2. Echo all data
        // echo '<pre>';
        // print_r($aUserData);
        // echo '</pre>';

        // Return items as JSON
        header('Content-Type: application/json');
        echo json_encode($aUserData);

    }
    
    index($conn); 

?>

