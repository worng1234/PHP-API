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

      $data = json_decode(file_get_contents("php://input"));

      //$item->id = $data->id;
      $item->prename = $data->prename;
      $item->m1_name = $data->m1_name;
      $item->surname = $data->surname;
      $item->sex = $data->sex;
      $item->pic = $data->pic;
      $item->id_number = $data->id_number;
      $item->birthday = $data->birthday;
      $item->religion = $data->religion;
      $item->nationality = $data->nationality;
      $item->origin = $data->origin;
      $item->father_name = $data->father_name;
      $item->father_id = $data->father_id;
      $item->father_job = $data->father_job;
      $item->father_tel = $data->father_tel;
      $item->mother_name = $data->mother_name;
      $item->mother_id = $data->mother_id;
      $item->mother_job = $data->mother_job;
      $item->mother_tel = $data->mother_tel;
      $item->parent = $data->parent;
      $item->parent_name = $data->parent_name;
      $item->parent_id = $data->parent_id;
      $item->parent_job = $data->parent_job;
      $item->parent_tel = $data->parent_tel;
      $item->house_number = $data->house_number;
      $item->bloc = $data->bloc;
      $item->street = $data->street;
      $item->road = $data->road;
      $item->sub_district = $data->sub_district;
      $item->district = $data->district;
      $item->province = $data->province;
      $item->post = $data->post;
      $item->final_school = $data->final_school;
      $item->final_school_sub_district = $data->final_school_sub_district;
      $item->final_school_district = $data->final_school_district;
      $item->final_school_province = $data->final_school_province;
      $item->m1_disabled = $data->m1_disabled;
      $item->poor_person = $data->poor_person;
      $item->etc = $data->etc;
      $item->tel = $data->tel;
      $item->email = $data->email;
      $item->name_cen = $data->name_cen;
      $item->father_namecen = $data->father_namecen;
      $item->mother_namecen = $data->mother_namecen;
      $item->parent_namecen = $data->parent_namecen;
      $item->father_surname = $data->father_surname;
      $item->mother_surname = $data->mother_surname;
      $item->parent_surname = $data->parent_surname;

      if($item->InsertStudent()){
        echo 'Newstudentm1 created successfully.';
      }else{
        echo 'Newstudentm1 created failed.';
      }


?>