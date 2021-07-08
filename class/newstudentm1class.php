<?php
    class Newstudentm1{

        
        private $conn;

        private $db_table = "new_student_register_m1";

        public $id;
        public $prename;
        public $m1_name;
        public $surname;
        public $sex;
        public $pic;
        public $id_number;
        public $birthday;
        public $religion;
        public $nationality;
        public $origin;
        public $father_name;
        public $father_id;
        public $father_job;
        public $father_tel;
        public $mother_name;
        public $mother_id;
        public $mother_job;
        public $mother_tel;
        public $parent;
        public $parent_name;
        public $parent_id;
        public $parent_job;
        public $parent_tel;
        public $house_number;
        public $bloc;
        public $street;
        public $road;
        public $sub_district;
        public $district;
        public $province;
        public $post;
        public $final_school;
        public $final_school_sub_district;
        public $final_school_district;
        public $final_school_province;
        public $m1_disabled;
        public $poor_person;
        public $etc;
        public $tel;
        public $email;
        public $name_cen;
        public $father_namecen;
        public $mother_namecen;
        public $parent_namecen;
        public $father_surname;
        public $mother_surname;
        public $parent_surname;

        public function __construct($db)
        {
            $this->conn = $db;
        }

        //getall
        public function getNewstudentm1All(){
            $sql = "SELECT * FROM " .$this->db_table."";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        //getid
         public function getNewstudentm1ID(){
            
            $sql = "SELECT * FROM ".$this->db_table." WHERE id = ? ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->id = $dataRow['id'];
            $this->prename = $dataRow['prename'];
            $this->m1_name = $dataRow['m1_name'];
            $this->surname = $dataRow['surname'];
            $this->sex = $dataRow['sex'];
            $this->pic = $dataRow['pic'];
            $this->id_number = $dataRow['id_number'];
            $this->birthday = $dataRow['birthday'];
            $this->religion = $dataRow['religion'];
            $this->nationality = $dataRow['nationality'];
            $this->origin = $dataRow['origin'];
            $this->father_name = $dataRow['father_name'];
            $this->father_id = $dataRow['father_id'];
            $this->father_job = $dataRow['father_job'];
            $this->father_tel = $dataRow['father_tel'];
            $this->mother_name = $dataRow['mother_name'];
            $this->mother_id = $dataRow['mother_id'];
            $this->mother_job = $dataRow['mother_job'];
            $this->mother_tel = $dataRow['mother_tel'];
            $this->parent = $dataRow['parent'];
            $this->parent_name = $dataRow['parent_name'];
            $this->parent_id = $dataRow['parent_id'];
            $this->parent_job = $dataRow['parent_job'];
            $this->parent_tel = $dataRow['parent_tel'];
            $this->house_number = $dataRow['house_number'];
            $this->bloc = $dataRow['bloc'];
            $this->street = $dataRow['street'];
            $this->road = $dataRow['road'];
            $this->sub_district = $dataRow['sub_district'];
            $this->district = $dataRow['district'];
            $this->province = $dataRow['province'];
            $this->post = $dataRow['post'];
            $this->final_school = $dataRow['final_school'];
            $this->final_school_sub_district = $dataRow['final_school_sub_district'];
            $this->final_school_district = $dataRow['final_school_district'];
            $this->final_school_province = $dataRow['final_school_province'];
            $this->m1_disabled = $dataRow['m1_disabled'];
            $this->poor_person = $dataRow['poor_person'];
            $this->etc = $dataRow['etc'];
            $this->tel = $dataRow['tel'];
            $this->email = $dataRow['email'];
            $this->name_cen = $dataRow['name_cen'];
            $this->father_namecen = $dataRow['father_namecen'];
            $this->mother_namecen = $dataRow['mother_namecen'];
            $this->parent_namecen = $dataRow['parent_namecen'];
            $this->father_surname = $dataRow['father_surname'];
            $this->mother_surname = $dataRow['mother_surname'];
            $this->parent_surname = $dataRow['parent_surname'];
        }
        
            //INSERTSTUDENT
        public function InsertStudent(){
            $sql = "INSERT INTO `new_student_register_m1`(prename,m1_name,surname,sex,pic,id_number,birthday,religion,nationality,origin,father_name,father_id,father_job,father_tel,mother_name,mother_id,mother_job,mother_tel,parent parent_name,parent_id,parent_job,parent_tel, house_number,bloc,street,road,sub_district,district,province,post,final_school,final_school_sub_district,final_school_district,final_school_province,m1_disabled,poor_person,etc,tel,email,name_cen,father_namecen,mother_namecen,parent_namecen,father_surname,mother_surname,parent_surname) VALUES(:prename, :m1_name, :surname, :sex, :pic, :id_number, :birthday, :religion, :nationality, :origin, :father_name,
            :father_id, :father_job, :father_tel, :mother_name, :mother_id, :mother_job, :mother_tel, :parent, :parent_name,
            :parent_id, :parent_job, :parent_tel, :house_number, :bloc, :street, :road, :sub_district, :district,province,
            :post, :final_school, :final_school_sub_district, :final_school_district, :final_school_province, :m1_disabled,
            :poor_person, :etc, :tel, :email, :name_cen, :father_namecen, :mother_namecen, :parent_namecen, :father_surname,
            :mother_surname, :parent_surname)";

            $stmt = $this->conn->prepare($sql);

            //$this->id=htmlspecialchars(strip_tags($this->id));
            $this->prename=htmlspecialchars(strip_tags($this->prename));
            $this->m1_name = htmlspecialchars(strip_tags($this->m1_name));
            $this->surname = htmlspecialchars(strip_tags($this->surname));
            $this->sex = htmlspecialchars(strip_tags($this->sex));
            $this->pic = htmlspecialchars(strip_tags($this->pic));
            $this->id_number = htmlspecialchars(strip_tags($this->id_number));
            $this->birthday = htmlspecialchars(strip_tags($this->birthday));
            $this->religion = htmlspecialchars(strip_tags($this->religion));
            $this->nationality = htmlspecialchars(strip_tags($this->nationality));
            $this->origin = htmlspecialchars(strip_tags($this->origin));
            $this->father_name = htmlspecialchars(strip_tags($this->father_name));
            $this->father_id = htmlspecialchars(strip_tags($this->father_id));
            $this->father_job = htmlspecialchars(strip_tags($this->father_job));
            $this->father_tel = htmlspecialchars(strip_tags($this->father_tel));
            $this->mother_name = htmlspecialchars(strip_tags($this->mother_name));
            $this->mother_id = htmlspecialchars(strip_tags($this->mother_id));
            $this->mother_job = htmlspecialchars(strip_tags($this->mother_job));
            $this->mother_tel = htmlspecialchars(strip_tags($this->mother_tel));
            $this->parent = htmlspecialchars(strip_tags($this->parent));
            $this->parent_name = htmlspecialchars(strip_tags($this->parent_name));
            $this->parent_id = htmlspecialchars(strip_tags($this->parent_id));
            $this->parent_job = htmlspecialchars(strip_tags($this->parent_job));
            $this->parent_tel = htmlspecialchars(strip_tags($this->parent_tel));
            $this->house_number = htmlspecialchars(strip_tags($this->house_number));
            $this->bloc = htmlspecialchars(strip_tags($this->bloc));
            $this->street = htmlspecialchars(strip_tags($this->street));
            $this->road = htmlspecialchars(strip_tags($this->road));
            $this->sub_district = htmlspecialchars(strip_tags($this->sub_district));
            $this->district = htmlspecialchars(strip_tags($this->district));
            $this->province = htmlspecialchars(strip_tags($this->province));
            $this->post = htmlspecialchars(strip_tags($this->post));
            $this->final_school = htmlspecialchars(strip_tags($this->final_school));
            $this->final_school_sub_district = htmlspecialchars(strip_tags($this->final_school_sub_district));
            $this->final_school_district = htmlspecialchars(strip_tags($this->final_school_district));
            $this->final_school_province = htmlspecialchars(strip_tags($this->final_school_province));
            $this->m1_disabled = htmlspecialchars(strip_tags($this->m1_disabled));
            $this->poor_person = htmlspecialchars(strip_tags($this->poor_person));
            $this->etc = htmlspecialchars(strip_tags($this->etc));
            $this->tel = htmlspecialchars(strip_tags($this->tel));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->name_cen = htmlspecialchars(strip_tags($this->name_cen));
            $this->father_namecen = htmlspecialchars(strip_tags($this->father_namecen));
            $this->mother_namecen = htmlspecialchars(strip_tags($this->mother_namecen));
            $this->parent_namecen = htmlspecialchars(strip_tags($this->parent_namecen));
            $this->father_surname = htmlspecialchars(strip_tags($this->father_surname));
            $this->mother_surname = htmlspecialchars(strip_tags($this->mother_surname));
            $this->parent_surname = htmlspecialchars(strip_tags($this->parent_surname));

            //$stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
            $stmt->bindParam(":prename", $this->prename);
            $stmt->bindParam(":m1_name", $this->m1_name);
            $stmt->bindParam(":surname", $this->surname);
            $stmt->bindParam(":sex", $this->sex);
            $stmt->bindParam(":pic", $this->pic);
            $stmt->bindParam(":id_number", $this->id_number);
            $stmt->bindParam(":birthday", $this->birthday);
            $stmt->bindParam(":religion", $this->religion);
            $stmt->bindParam(":nationality", $this->nationality);
            $stmt->bindParam(":origin", $this->origin);
            $stmt->bindParam(":father_name", $this->father_name);
            $stmt->bindParam(":father_id", $this->father_id);
            $stmt->bindParam(":father_job", $this->father_job);
            $stmt->bindParam(":father_tel", $this->father_tel);
            $stmt->bindParam(":mother_name", $this->mother_name);
            $stmt->bindParam(":mother_id", $this->mother_id);
            $stmt->bindParam(":mother_job", $this->mother_job);
            $stmt->bindParam(":mother_tel", $this->mother_tel);
            $stmt->bindParam(":parent", $this->parent);
            $stmt->bindParam(":parent_name", $this->parent_name);
            $stmt->bindParam(":parent_id", $this->parent_id);
            $stmt->bindParam(":parent_job", $this->parent_job);
            $stmt->bindParam(":parent_tel", $this->parent_tel);
            $stmt->bindParam(":house_number", $this->house_number);
            $stmt->bindParam(":bloc", $this->bloc);
            $stmt->bindParam(":street", $this->street);
            $stmt->bindParam(":road", $this->road);
            $stmt->bindParam(":sub_district", $this->sub_district);
            $stmt->bindParam(":district", $this->district);
            $stmt->bindParam(":province", $this->province);
            $stmt->bindParam(":post", $this->post);
            $stmt->bindParam(":final_school", $this->final_school);
            $stmt->bindParam(":final_school_sub_district", $this->final_school_sub_district);
            $stmt->bindParam(":final_school_district", $this->final_school_district);
            $stmt->bindParam(":final_school_district", $this->final_school_district);
            $stmt->bindParam(":m1_disabled", $this->m1_disabled);
            $stmt->bindParam(":poor_person", $this->poor_person);
            $stmt->bindParam(":etc", $this->etc);
            $stmt->bindParam(":tel", $this->tel);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":name_cen", $this->name_cen);
            $stmt->bindParam(":father_namecen", $this->father_namecen);
            $stmt->bindParam(":mother_namecen", $this->mother_namecen);
            $stmt->bindParam(":parent_namecen", $this->parent_namecen);
            $stmt->bindParam(":father_surname", $this->father_surname);
            $stmt->bindParam(":mother_surname", $this->mother_surname);
            $stmt->bindParam(":parent_surname", $this->parent_surname);
            
            /*$insert = $stmt->execute(array(
                "prename" => $this->prename,
                "m1_name" => $this->m1_name,
                "surname" => $this->surname,
                "sex" => $this->sex,
                "pic" => $this->pic,
                "id_number" => $this->id_number,
                "birthday" => $this->birthday,
                "religion" => $this->religion,
                "nationlity" => $this->nationality,
                "origin" => $this->origin,
                "father_name" => $this->father_name,
                "father_id" => $this->father_id,
                "father_job" => $this->father_job,
                "father_tel" => $this->father_tel,
                "mother_name" => $this->mother_name,
                "mother_id" => $this->mother_id,
                "mother_job" => $this->mother_job,
                "mother_tel" => $this->mother_tel,
                "parent" => $this->parent,
                "parent_name" => $this->parent_name,
                "parent_id" => $this->parent_id,
                "parent_job" => $this->parent_job,
                "parent_tel" => $this->parent_tel,
                "house_number" => $this->house_number,
                "bloc" => $this->bloc,
                "street" => $this->street,
                "road" => $this->road,
                "sub_disrict" => $this->sub_district,
                "district" => $this->district,
                "province" => $this->province,
                "post" => $this->post,
                "final_school" => $this->final_school,
                "final_school_sub_district" => $this->final_school_sub_district,
                "final_school_district" => $this->final_school_district,
                "final_school_province" => $this->final_school_province,
                "m1_disabled" => $this->m1_disabled,
                "poor_person" => $this->poor_person,
                "etc" => $this->etc,
                "tel" => $this->tel,
                "email" => $this->email,
                "name_cen" => $this->name_cen,
                "father_namecen" => $this->father_namecen,
                "mother_namecen" => $this->mother_namecen,
                "parent_namecen" => $this->parent_namecen,
                "father_surname" => $this->father_surname,
                "mother_surname" => $this->mother_surname,
                "parent_surname" => $this->parent_surname,
            ));*/

            if($stmt->execute()){
                return true;
            }
            return false;
            

        }
        public function InsertS(){
            $sql = "INSERT INTO new_student_register_m1 
                    (prename, m1_name, surname, sex, pic, id_number, birthday, religion, nationality, origin, father_name,
                    father_id, father_job, father_tel, mother_name, mother_id, mother_job, mother_tel, parent, parent_name,
                    parent_id, parent_job, parent_tel, house_number, bloc, street, road, sub_district, district,province,
                    post, final_school, final_school_sub_district, final_school_district, final_school_province, m1_disabled,
                    poor_person, etc, tel, email, name_cen, father_namecen, mother_namecen, parent_namecen, father_surname,
                    mother_surname, parent_surname)
                VALUES (:prename, :m1_name, :surname, :sex, :pic, :id_number, :birthday, :religion, :nationality, :origin, :father_name,
                    :father_id, :father_job, :father_tel, :mother_name, :mother_id, :mother_job, :mother_tel, :parent, :parent_name,
                    :parent_id, :parent_job, :parent_tel, :house_number, :bloc, :street, :road, :sub_district, :district,province,
                    :post, :final_school, :final_school_sub_district, :final_school_district, :final_school_province, :m1_disabled,
                    :poor_person, :etc, :tel, :email, :name_cen, :father_namecen, :mother_namecen, :parent_namecen, :father_surname,
                    :mother_surname, :parent_surname)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute(
                array( "prename" => $this->prename,
                "m1_name" => $this->m1_name,
                "surname" => $this->surname,
                "sex" => $this->sex,
                "pic" => $this->pic,
                "id_number" => $this->id_number,
                "birthday" => $this->birthday,
                "religion" => $this->religion,
                "nationlity" => $this->nationality,
                "origin" => $this->origin,
                "father_name" => $this->father_name,
                "father_id" => $this->father_id,
                "father_job" => $this->father_job,
                "father_tel" => $this->father_tel,
                "mother_name" => $this->mother_name,
                "mother_id" => $this->mother_id,
                "mother_job" => $this->mother_job,
                "mother_tel" => $this->mother_tel,
                "parent" => $this->parent,
                "parent_name" => $this->parent_name,
                "parent_id" => $this->parent_id,
                "parent_job" => $this->parent_job,
                "parent_tel" => $this->parent_tel,
                "house_number" => $this->house_number,
                "bloc" => $this->bloc,
                "street" => $this->street,
                "road" => $this->road, 
                "sub_disrict" => $this->sub_district,
                "district" => $this->district,
                "province" => $this->province, 
                "post" => $this->post,
                "final_school" => $this->final_school,
                "final_school_sub_district" => $this->final_school_sub_district,
                "final_school_district" => $this->final_school_district,
                "final_school_province" => $this->final_school_province,
                "m1_disabled" => $this->m1_disabled,
                "poor_person" => $this->poor_person,
                "etc" => $this->etc,
                "tel" => $this->tel,
                "email" => $this->email,
                "name_cen" => $this->name_cen,
                "father_namecen" => $this->father_namecen,
                "mother_namecen" => $this->mother_namecen,
                "parent_namecen" => $this->parent_namecen,
                "father_surname" => $this->father_surname,
                "mother_surname" => $this->mother_surname,
                "parent_surname" => $this->parent_surname,)
            );
        }
       

        

        

        

    }



?>