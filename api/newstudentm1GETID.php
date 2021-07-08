<?php
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: POST");
     header("Access-Control-Max-Age: 3600");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../config/connect.php';
    include_once '../class/newstudentm1class.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Newstudentm1($db);
    $item->id = isset($_GET['id']) ? $_GET['id'] : die();

    $item->getNewstudentm1ID();

    $nm_arr = array(
        'id' => $item->id,
        'prename' => $item->prename,
        'm1_name' => $item->m1_name,
        'surname' => $item->surname,
        'sex' => $item->sex,
        'pic' => $item->pic,
        'id_number' => $item->id_number,
        'birthday' => $item->birthday,
        'religion' => $item->religion,
        'nationality' => $item->nationality,
        'origin' => $item->origin,
        'father_name' => $item->father_name,
        'father_id' => $item->father_id,
        'father_job' => $item->father_job,
        'father_tel' => $item->father_tel,
        'mother_name' => $item->mother_name,
        'mother_id' => $item->mother_id,
        'mother_job' => $item->mother_job,
        'mother_tel' => $item->mother_tel,
        'parent' => $item->parent,
        'parent_name' => $item->parent_name,
        'parent_id' => $item->parent_id,
        'parent_job' => $item->parent_job, 
        'parent_tel' => $item->parent_tel,
        'house_number' => $item->house_number,
        'bloc' => $item->bloc,
        'street' => $item->street,
        'road' => $item->road,
        'sub_district' => $item->sub_district,
        'district' => $item->district,
        'province' => $item->province,
        'post' => $item->post,
        'final_school' => $item->final_school,
        'final_school_sub_district' => $item->final_school_sub_district,
        'final_school_district' => $item->final_school_district,
        'final_school_province' => $item->final_school_province,
        'm1_disabled' => $item->m1_disabled,
        'poor_person' => $item->poor_person,
        'etc' => $item->etc,
        'tel' => $item->tel,
        'email' => $item->email,
        'name_cen' => $item->name_cen,
        'father_namecen' => $item->father_namecen,
        'mother_namecen' => $item->mother_namecen,
        'parent_namecen' => $item->parent_namecen,
        'father_surname' => $item->father_surname,
        'mother_surname' => $item->mother_surname,
        'parent_surname' => $item->parent_surname,
        
    );
    print_r(json_encode($nm_arr));

?>