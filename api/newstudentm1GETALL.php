<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/connect.php';
    include_once '../class/newstudentm1class.php';

    $database = new Database(); 
    $db = $database->getConnection();

    $items = new Newstudentm1($db);

    $stmt = $items->getNewstudentm1All();
    $itemCount = $stmt->rowCount();
   
    echo json_encode($itemCount);

    if($itemCount > 0){
        
        $newstudentArr = array();
        $newstudentArr["body"] = array();
        $newstudentArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "prename" => $prename,
                "m1_name" => $m1_name,
                "surname" => $surname,
                "sex" => $sex,
                "pic" => $pic,
                "id_number" => $id_number,
                "birthday" => $birthday,
                "religion" => $religion,
                "nationality" => $nationality,
                "origin" => $origin,
                "father_name" => $father_name,
                "father_id" => $father_id,
                "father_job" => $father_job,
                "father_tel" => $father_tel,
                "mother_name" => $mother_name,
                "mother_id" => $mother_id,
                "mother_job" => $mother_job,
                "mother_tel" => $mother_tel,
                "parent" => $parent,
                "parent_name" => $parent_name,
                "parent_id" => $parent_id,
                "parent_job" => $parent_job,
                "parent_tel" => $parent_tel,
                "house_number" => $house_number,
                "bloc" => $bloc,
                "street" => $street,
                "road" => $road,
                "sub_district" => $sub_district,
                "district" => $district,
                "province" => $province,
                "post" => $post,
                "final_school" => $final_school,
                "final_school_sub_district" => $final_school_sub_district,
                "final_school_district" => $final_school_district,
                "final_school_province" => $final_school_province,
                "m1_disabled" => $m1_disabled,
                "poor_person" => $poor_person,
                "etc" => $etc,
                "tel" => $tel,
                "email" => $email,
                "name_cen" => $name_cen,
                "father_namecen" => $father_namecen,
                "mother_namecen" => $mother_namecen,
                "parent_namecen" => $parent_namecen,
                "father_surname" => $father_surname,
                "mother_surname" => $mother_surname,
                "parent_surname" => $parent_surname,
            );

            array_push($newstudentArr["body"], $e);
        }
        echo json_encode($newstudentArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }


?> 