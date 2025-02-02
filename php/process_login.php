<?php 
session_start(); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$email = $_POST['email']; 
$password = $_POST['password']; 

$conn = new mysqli('localhost', 'root', '','mabiblio'); 
if(!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

try {
    $EmailSql = "SELECT name,email,password FROM users WHERE email = ?";
    $stmt = $conn->prepare($EmailSql);
    $stmt->bind_param("s", $email);
    $stmt->execute(); 

    $result = $stmt->get_result();
   
    
    if($result->num_rows >0) {

        $user =  $result->fetch_assoc();
        if(password_verify($password,$user['password'])) {

            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['livrelus'] = [];

            $_SESSION['connexion-check'] = null;
            header("Location: profil.php");
            exit();
        } else {
            $_SESSION['connexion-check'] = "Email ou Mot de passe Incorrect";
            header("Location: login.php");
            exit();
        }

    } else {
            $_SESSION['connexion-check'] = "Email ou Mot de passe Incorrect";
            header("Location: login.php");
            exit();
    }
} catch (PDOException $e) {
echo "Erreur insertion : " . $e->getMessage();
}

$stmt->close();
$conn->close();
}
?>