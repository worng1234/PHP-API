<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: PUT");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    require '../config/connect.php';
    $db_connection = new Database();
    $conn = $db_connection->getConnection();

    $data = json_decode(file_get_contents("php://input"));

    if(isset($data->id)){
        $msg['message'] = '';
        $post_id = $data->id;

        $get_post = "SELECT * FROM `new_student_register_m1` WHERE id=:post_id";
        $get_stmt = $conn->prepare($get_post);
        $get_stmt->bindValue(':post_id', $post_id,PDO::PARAM_INT);
        $get_stmt->execute();

        if($get_stmt->rowCount() > 0){
            $row = $get_stmt->fetch(PDO::FETCH_ASSOC);

            $post_prename = isset($data->prename) ? $data->prename : $row['prename'];
            $post_surname = isset($data->surname) ? $data->surname : $row['surname'];
            $post_m1_name = isset($data->m1_name) ? $data->m1_name : $row['m1_name'];
            $post_sex = isset($data->sex) ? $data->sex : $row['sex'];
            $post_pic = isset($data->pic) ? $data->pic : $row['pic'];
            $post_id_number = isset($data->id_number) ? $data->id_number : $row['id_number'];
            $post_birthday = isset($data->birthday) ? $data->birthday : $row['birthday'];
            $post_religion = isset($data->religion) ? $data->religion : $row['religion'];
            $post_nationality = isset($data->nationality) ? $data->nationality : $row['nationality'];
            $post_origin = isset($data->origin) ? $data->origin : $row['origin'];
            $post_m1_disabled = isset($data->m1_disabled) ? $data->m1_disabled : $row['m1_disabled'];
            $post_poor_person = isset($data->poor_person) ? $data->poor_person : $row['poor_person'];
            $post_etc = isset($data->etc) ? $data->etc : $row['etc'];
            $post_tel = isset($data->tel) ? $data->tel : $row['tel'];
            $post_email = isset($data->email) ? $data->email : $row['email'];
            $post_name_cen = isset($data->name_cen) ? $data->name_cen : $row['name_cen'];

            $up_sql = "UPDATE new_student_register_m1 SET prename = :prename, m1_name = :m1_name, 
            surname = :surname, sex = :sex, pic = :pic, id_number = :id_number, birthday = :birthday, 
            religion = :religion, nationality = :nationality, origin = :origin, m1_disabled = :m1_disabled, 
            poor_person = :poor_person, etc = :etc, tel = :tel, email = :email, name_cen = :name_cen 
            WHERE id = :id";

            $up_stmt = $conn->prepare($up_sql);

            $up_stmt->bindValue(':prename', htmlspecialchars(strip_tags($post_prename)),PDO::PARAM_STR);
            $up_stmt->bindValue(':m1_name', htmlspecialchars(strip_tags($post_m1_name)),PDO::PARAM_STR);
            $up_stmt->bindValue(':surname', htmlspecialchars(strip_tags($post_surname)),PDO::PARAM_STR);
            $up_stmt->bindValue(':sex', htmlspecialchars(strip_tags($post_sex)),PDO::PARAM_STR);
            $up_stmt->bindValue(':pic', htmlspecialchars(strip_tags($post_pic)),PDO::PARAM_STR);
            $up_stmt->bindValue(':id_number', htmlspecialchars(strip_tags($post_id_number)),PDO::PARAM_STR);
            $up_stmt->bindValue(':birthday', htmlspecialchars(strip_tags($post_birthday)),PDO::PARAM_STR);
            $up_stmt->bindValue(':religon', htmlspecialchars(strip_tags($post_religion)),PDO::PARAM_STR);
            $up_stmt->bindValue(':nationality', htmlspecialchars(strip_tags($post_nationality)),PDO::PARAM_STR);
            $up_stmt->bindValue(':origin', htmlspecialchars(strip_tags($post_origin)),PDO::PARAM_STR);
            $up_stmt->bindValue(':m1_disabled', htmlspecialchars(strip_tags($post_m1_disabled)),PDO::PARAM_STR);
            $up_stmt->bindValue(':poor_person', htmlspecialchars(strip_tags($post_poor_person)),PDO::PARAM_STR);
            $up_stmt->bindValue(':etc', htmlspecialchars(strip_tags($post_etc)),PDO::PARAM_STR);
            $up_stmt->bindValue(':tel', htmlspecialchars(strip_tags($post_tel)),PDO::PARAM_STR);
            $up_stmt->bindValue(':email', htmlspecialchars(strip_tags($post_email)),PDO::PARAM_STR);
            $up_stmt->bindValue(':name_cen', htmlspecialchars(strip_tags($post_name_cen)),PDO::PARAM_STR);
            $up_stmt->bindValue(':id', $post_id,PDO::PARAM_INT);

            if($up_stmt->execute()){
                $msg['message'] = 'Data updated successfully';
            }else{
                $msg['message'] = 'data not updated';
            }   
        }else{
            $msg['message'] = 'Invlid ID';
        }  
        
        echo  json_encode($msg);
    }



?>