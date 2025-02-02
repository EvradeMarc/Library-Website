<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $name = $_POST['name']; 
        $first_name = $_POST['firstname'];
        $email = $_POST['email']; 

        $full_name = "$name $first_name";

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

        $conn = new mysqli('localhost', 'root', '','mabiblio'); 
        if(!$conn) {
            die("Erreur de connexion : " . mysqli_connect_error());
        }

        try {
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)"); 
        $stmt->bind_param("sss",$full_name, $email, $password); 
        $stmt->execute(); 
        header("Location: login.php");
    } catch (PDOException $e) {
        echo "Erreur insertion : " . $e->getMessage();
    }
    } 
    $conn->close(); 
    $stmt->close();
?>