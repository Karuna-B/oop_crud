<?php

class User extends Connection{
        public function create($data){

            $username=$data['username'];
            $password=password_hash($data['password'],PASSWORD_DEFAULT);
            $email=$data['email'];

            $sql="insert into users(username, password, email) values ('$username','$password','$email')";

            return $this->conn->query($sql);
        }

        public function delete($id){
            $id=(int)$id;
            $sql="delete from users where id =  $id";
            return $this->conn->query($sql);
        }

        public function all(){
            $sql="select * from users ordered by id desc";
            $run=$this->conn->query($sql);
            $users=[];
            while($data=$run->fetch_objects()){
                $users[]=$data;
            }

            return $users;
        }

    }