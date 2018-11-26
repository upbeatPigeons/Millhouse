<?php
require ('database_connection.php');

//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if (isset($_POST['register'])) {

    //Retrieve the field values from our registration form.
    //$username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $statement = $pdo->prepare($sql);

    //Bind the provided username to our prepared statement.
    $statement->bindValue(':username', $username);

    //Execute.
    $statement->execute();

    //Fetch the row.  
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    //If the provided username already exists - display error.
    if ($row['num'] > 0) {
        die("user taken");
    }

   $username = $_POST['username'];
   
    
    /* $is_mail = filter_var($username, FILTER_VALIDATE_username);
    //If the username is invalid kill it. Otherwise procede with adding it to the database.
    if (!$is_mail) {
        die("enter valid stuff");
    } else { */
    
        //Hash the password as we do NOT want to store our passwords in plain text.
        //$passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        
        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
        $statement = $pdo->prepare($sql);
        
        //Bind our variables.
        $statement->execute(
          [
            ":username" => $username,
            ":password" => $hashed_password
          ]
          );

        //Execute the statement and insert the new account.
       /*  $result = $statement->execute();
        var_dump($result);
        //If the signup process is successful.
        if ($result) {
            header("thanks for reg");
        } */
     //}
}
