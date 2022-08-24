<?php 

require_once 'DB_connect.php';


function showAllAdmin(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAdmin($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$uname%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addAdmin($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (fname, lname, uname, phone, email, Password)
VALUES (:fname, :lname, :uname, :phone, :email, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':fname' => $data['fname'],
        	':lname' => $data['lname'],
        	':uname' => $data['uname'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
        	':password' => $data['password']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateAdmin($id, $data){
    $conn = DB_conn();
    $selectQuery = "UPDATE user_info set fname = ?, lname = ?, uname = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['fname'], $data['lname'], $data['uname'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteAdmin($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}