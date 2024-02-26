<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Registration Form</title> 
    <link rel="stylesheet" 
          href="style.css"> 
</head> 
  
<body> 
    <div class="main"> 
        <h1>Регистрация:</h1> 
        <form action=""> 
            <label for="name">Име:</label> 
            <input type="text" id="name" 
                   name="first" 
                   placeholder="Въведете името си" required> 
  
            <label for="email">Имейл:</label> 
            <input type="email" id="email" 
                   name="email" 
                   placeholder="Enter your email" required> 
  
            <label for="password">Парола:</label> 
            <input type="password" id="password" 
                   name="password"
                   placeholder="Въведете парола"
                   pattern= 
                   "^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required                    
                   title="Трябва да съдържа поне едно число, една буква и да е минимум 8 знака"> 
  
            <input type="submit" value="sumbit">
        </form> 
    </div> 
    <script src="script.js"></script> 
</body> 
  
</html>