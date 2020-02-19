<?php

//create_table();
//drop_table();
get_content();
//contact_form_insert();
//contact_insert();

function get_db_connection() {
$servername = "crl.wno.mybluehost.me";
$username = "crlwnomy_miller";
$db_name = "crlwnomy_miller";
$password = "Miller2019";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name",$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Server Connected";

} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
return $conn;
}

function create_table(){
    $conn = get_db_connection();
    try {
        //sql to create table
        $sql = "CREATE TABLE jmills_contact (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(255),
            last_name VARCHAR(255),
            email VARCHAR(255),
            telephone VARCHAR(255),
            message1 VARCHAR(255)
            )";

$conn->exec($sql);
echo "Table created successfully";

} catch(PDOException $e){
    echo "Connection failed to create table: " . $e->getMessage();
}
$conn = null;
}


function contact_insert($nametext, $phonetext, $emailtext, $messagetext){
    $conn = get_db_connection();
    try{
        $sql = "INSERT INTO jmills_contact (nametext, phonetext, emailtext, messagetext) VALUES 
        ('$nametext',  '$phonetext', '$emailtext', '$messagetext')";

        $conn->exec($sql);
        echo "<br>Inserted Successfully!";
    } catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}





function contact_form_insert($first_name, $last_name, $email, $telephone, $message1){
    $conn = get_db_connection();
    try{
        $sql = "INSERT INTO jmills_contact_table (first_name, last_name, email, telephone, message1) VALUES 
        ('$first_name', '$last_name', '$email', '$telephone', '$message1')";

        $conn->exec($sql);
        echo "<br>Inserted Successfully!";
    } catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
function get_content(){
    $conn = get_db_connection();
    try{
        $stmt = $conn->prepare("SELECT * FROM jmills_contact_table");
        $stmt->execute();
        // return $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // print_r($stmt->fetchAll());

        foreach($stmt->fetchAll() as $row) { 
            foreach($row as $data){
                echo '<br>'.$data;
            }
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
function drop_table(){
    $conn = get_db_connection();
    try {
        // sql to create table
        $sql = "DROP TABLE contact_responses;";
    
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table contact_responses deleted successfully";
    } catch(PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
    $conn = null;
}





?>