<?php
include_once 'index.php';
require 'dbc.inc.php';
    
    // Take the value usernam from user.
    // (?? 'Guast') is for make a default value.
    // mysqli_real_escape_string() Escapes special characters in a string for use in an SQL statement
    $username = mysqli_real_escape_string($_POST['usernam'] ?? 'Guast');
    $password = mysqli_real_escape_string($_POST['pass'] ?? '1111');
    
    // We use stripcslashes to convert username to string
    $userST = stripcslashes($username);
    $passST = stripcslashes($password);

// When the user submit the information this code will run
if( isset($_POST['Login']) )
{
    if( $userST=='' && $passST=='')  {
            echo("User Name or Password fields are empty");
            return false;
    }  // End if( $userST=='' && $passST=='')
    else {

        // This  variable store the SQL statement
        $query = "select * from users where user_first = '$userST' and user_pwd ='$passST';";
        // This variable return true of false
        $result = mysqli_query($conn, $query);
        // This variable store the result of our query
        $row = mysqli_fetch_assoc($result);
        // This variable store the number of rows in the result
        $resultCheck = mysqli_num_rows($result);

            // It checks if thir is result
            if($resultCheck > 0)
            {
            
            // It checks if the user entered the username and the password correctly
            if ($row['user_first'] == $userST && $row['user_pwd'] == $passST)
            {
                    echo "Login success!!!!"."<br>";
                    echo $row['user_first']." ";
                   echo $row['user_last']." ";
                   echo $row['user_uid']."<br>";    
            } 
        }// the end of $resultCheck > 0
            else {
                echo  'username is '.$userST.' wrong or password is wrong';
            } // End else
    } // End else
} // End if( isset($_POST['Login'])
?>