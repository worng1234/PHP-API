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

    $sql = "INSERT INTO new_student_register_m1(prename,m1_name,surname,sex,pic,id_number,birthday,religion,nationality,
    origin,father_name,father_id,father_job,father_tel) 
    VALUES(:prename, :m1_name, :surname, :sex, :pic, :id_number, :birthday, :religion, :nationality, :origin,
    :father_name, :father_id, :father_job, :father_tel)";
    
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
    $stmt->bindValue(':father_name', htmlspecialchars_decode(strip_tags($data->father_name)), PDO::PARAM_STR);
    $stmt->bindValue(':father_id', htmlspecialchars_decode(strip_tags($data->father_id)), PDO::PARAM_STR);
    $stmt->bindValue(':father_job', htmlspecialchars_decode(strip_tags($data->father_job)), PDO::PARAM_STR);
    $stmt->bindValue(':father_tel', htmlspecialchars_decode(strip_tags($data->father_tel)), PDO::PARAM_STR);
    /*$stmt->bindValue(':mother_name', htmlspecialchars_decode(strip_tags($data->mother_name)), PDO::PARAM_STR);
    $stmt->bindValue(':mother_id', htmlspecialchars_decode(strip_tags($data->mother_id)), PDO::PARAM_STR);
    $stmt->bindValue(':mother_job', htmlspecialchars_decode(strip_tags($data->mother_job)), PDO::PARAM_STR);
    $stmt->bindValue(':mother_tel', htmlspecialchars_decode(strip_tags($data->mother_tel)), PDO::PARAM_STR);
    $stmt->bindValue(':parent', htmlspecialchars_decode(strip_tags($data->parent)), PDO::PARAM_STR);
    $stmt->bindValue(':parent_name', htmlspecialchars_decode(strip_tags($data->parent_name)), PDO::PARAM_STR);
    $stmt->bindValue(':parent_id', htmlspecialchars_decode(strip_tags($data->parent_id)), PDO::PARAM_STR);
    $stmt->bindValue(':parent_job', htmlspecialchars_decode(strip_tags($data->parent_job)), PDO::PARAM_STR);
    $stmt->bindValue(':parent_tel', htmlspecialchars_decode(strip_tags($data->parent_tel)), PDO::PARAM_STR);
    $stmt->bindValue(':house_number', htmlspecialchars_decode(strip_tags($data->house_number)), PDO::PARAM_STR);
    $stmt->bindValue(':bloc', htmlspecialchars_decode(strip_tags($data->bloc)), PDO::PARAM_STR);
    $stmt->bindValue(':street', htmlspecialchars_decode(strip_tags($data->street)), PDO::PARAM_STR);
    $stmt->bindValue(':road', htmlspecialchars_decode(strip_tags($data->road)), PDO::PARAM_STR);
    $stmt->bindValue(':sub_district', htmlspecialchars_decode(strip_tags($data->sub_district)), PDO::PARAM_STR);
    $stmt->bindValue(':district', htmlspecialchars_decode(strip_tags($data->district)), PDO::PARAM_STR);
    $stmt->bindValue(':province', htmlspecialchars_decode(strip_tags($data->province)), PDO::PARAM_STR);
    $stmt->bindValue(':post', htmlspecialchars_decode(strip_tags($data->post)), PDO::PARAM_STR);
    $stmt->bindValue(':final_school', htmlspecialchars_decode(strip_tags($data->final_school)), PDO::PARAM_STR);
    $stmt->bindValue(':final_school_sub_district', htmlspecialchars_decode(strip_tags($data->final_school_sub_district)), PDO::PARAM_STR);
    $stmt->bindValue(':final_school_district', htmlspecialchars_decode(strip_tags($data->final_school_district)), PDO::PARAM_STR);
    $stmt->bindValue(':final_school_province', htmlspecialchars_decode(strip_tags($data->final_school_province)), PDO::PARAM_STR);
    $stmt->bindValue(':m1_diabled', htmlspecialchars_decode(strip_tags($data->m1_disabled)), PDO::PARAM_STR);
    $stmt->bindValue(':poor_person', htmlspecialchars_decode(strip_tags($data->poor_person)), PDO::PARAM_STR);
    $stmt->bindValue(':etc', htmlspecialchars_decode(strip_tags($data->etc)), PDO::PARAM_STR);
    $stmt->bindValue(':tel', htmlspecialchars_decode(strip_tags($data->tel)), PDO::PARAM_STR);
    $stmt->bindValue(':email', htmlspecialchars_decode(strip_tags($data->email)), PDO::PARAM_STR);
    $stmt->bindValue(':name_cen', htmlspecialchars_decode(strip_tags($data->name_cen)), PDO::PARAM_STR);
    $stmt->bindValue(':father_namecen', htmlspecialchars_decode(strip_tags($data->father_namecen)), PDO::PARAM_STR);
    $stmt->bindValue(':mother_namecen', htmlspecialchars_decode(strip_tags($data->mother_namecen)), PDO::PARAM_STR);
    $stmt->bindValue(':parent_namecen', htmlspecialchars_decode(strip_tags($data->parent_namecen)), PDO::PARAM_STR);
    $stmt->bindValue(':father_surname', htmlspecialchars_decode(strip_tags($data->father_surname)), PDO::PARAM_STR);
    $stmt->bindValue(':mother_surname', htmlspecialchars_decode(strip_tags($data->mother_surname)), PDO::PARAM_STR);
    $stmt->bindValue(':parent_surname', htmlspecialchars_decode(strip_tags($data->parent_surname)), PDO::PARAM_STR);
    */
    if($stmt->execute()){
        $msg['message'] = 'Data Inserted Successfully';
    }
    else{
        $msg['message'] = 'Data not Inserted ';
    }

    echo json_encode($msg);

?>