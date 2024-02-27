<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Registration Form</title> 
    <link rel="stylesheet" 
          href="css/register.css"> 
</head> 
  
<body> 
    <?php
    require("db.php");

    if ( isset( $_POST['submit'] ) ) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hashedPassword = hash("sha256", $password);
		$sql = "INSERT INTO users ( name, email, password) VALUES (?,?,?)";
		$connection->prepare($sql)->execute([$name, $email, $hashedPassword]);
        
        header("location: login.php");    
    }
     ?>
    <div class="main"> 
        <h1>Регистрация:</h1> 
        <form action="" method="post"> 
            <label for="name">Име:</label> 
            <input type="text" id="first" 
                   name="name" 
                   placeholder="Въведете името си" required> 
  
            <label for="email">Имейл:</label> 
            <input type="email" id="email" 
                   name="email" 
                   placeholder="Въведете имейла си" required> 
  
            <label for="password">Парола:</label> 
            <input type="password" id="password" 
                   name="password"
                   placeholder="Въведете парола"
                   pattern= 
                   "^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required                    
                   title="Трябва да съдържа поне едно число, една буква и един специален символ. Паролата да е минимум 8 знака"> 
            <input type="submit" value="Въведи" name="submit">
            <button id="return"><a href="index.php">Върни се</a></button>
        </form> 
    </div> 
    <script src="script.js"></script> 
</body> 
  
</html>