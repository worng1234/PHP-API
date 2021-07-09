<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require '../config/connect.php';
    $db_connection = new Database();
    $conn = $db_connection->getConnection();

    $data = json_decode(file_get_contents("php://input"));

    $msg['message'] = '';

    $sql = "INSERT INTO `new_student_register_m1`(prename,m1_name,surname,sex,pic,id_number,birthday,religion,
    nationality,origin,m1_disabled,poor_person,etc,tel,email,name_cen) 
    VALUES(:prename,:m1_name,:surname,:sex,:pic,:id_number,:birthday,:religion,:nationality,:origin,
    :m1_disabled,:poor_person,:etc,:tel,:email,:name_cen)";
    
    $stmt = $conn->prepare($sql); 

    $stmt->bindValue(':prename', htmlspecialchars_decode(strip_tags($data->prename)), PDO::PARAM_STR);
    $stmt->bindValue(':m1_name', htmlspecialchars_decode(strip_tags($data->m1_name)), PDO::PARAM_STR);
    $stmt->bindValue(':surname', htmlspecialchars_decode(strip_tags($data->surname)), PDO::PARAM_STR);
    $stmt->bindValue(':sex', htmlspecialchars_decode(strip_tags($data->sex)), PDO::PARAM_STR);
    $stmt->bindValue(':pic', htmlspecialchars_decode(strip_tags($data->pic)), PDO::PARAM_STR);
    $stmt->bindValue(':id_number', htmlspecialchars_decode(strip_tags($data->id_number)), PDO::PARAM_STR);
    $stmt->bindValue(':birthday', htmlspecialchars_decode(strip_tags($data->birthday)), PDO::PARAM_STR);
    $stmt->bindValue(':religion', htmlspecialchars_decode(strip_tags($data->religion)), PDO::PARAM_STR);
    $stmt->bindValue(':nationality', htmlspecialchars_decode(strip_tags($data->nationality)), PDO::PARAM_STR);
    $stmt->bindValue(':origin', htmlspecialchars_decode(strip_tags($data->origin)), PDO::PARAM_STR);
    $stmt->bindValue(':m1_disabled', htmlspecialchars_decode(strip_tags($data->m1_disabled)), PDO::PARAM_STR);
    $stmt->bindValue(':poor_person', htmlspecialchars_decode(strip_tags($data->poor_person)), PDO::PARAM_STR);
    $stmt->bindValue(':etc', htmlspecialchars_decode(strip_tags($data->etc)), PDO::PARAM_STR);
    $stmt->bindValue(':tel', htmlspecialchars_decode(strip_tags($data->tel)), PDO::PARAM_STR);
    $stmt->bindValue(':email', htmlspecialchars_decode(strip_tags($data->email)), PDO::PARAM_STR);
    $stmt->bindValue(':name_cen', htmlspecialchars_decode(strip_tags($data->name_cen)), PDO::PARAM_STR);
    
    if($stmt->execute()){
        $msg['message'] = 'Data Inserted Successfully';
    }
    else{
        $msg['message'] = 'Data not Inserted ';
    }

    echo json_encode($msg);

?>