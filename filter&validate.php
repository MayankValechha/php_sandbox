<?php 
    //Check for posted data.

    // filter_has_var : This function checks if a variable of a specified input type exists.

    // filter_has_var(INPUT_POST/INPUT_GET,'Name of Input Field');

    // if(filter_has_var(INPUT_POST, 'name')) {
    //     echo 'Data Found!';
    // } else {
    //     echo 'No Data Found.';
    // } 

    if(filter_has_var(INPUT_POST, 'name')) {

        // Grabbing value of name input into into email.
        $email = $_POST['name'];   

        // filter_input checks for correctness of input value, like is an email valid? etc etc.

        //filter_input(INPUT_POST/INPUT_GET, 'Name of Input Field', WHAT TO VALIDATE)

        // if(filter_input(INPUT_POST, 'name', FILTER_VALIDATE_EMAIL)){
        //     echo 'Email is Valid!';
        // } else {
        //     echo 'Email is invalid!';
        // }
        
         
        //Check for illegal characters in email.
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'e-mail is valid.';
        } else {
            echo 'e-mail is invalid.';
        }

    }
?>




<!-- PHP_SELF : It is superglobal varible that return the current script being executed. 

It is an alternative to write a file name, it will also work if we change the name of this current file.
-->

<form method = "POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="name">
    <br>
    <input type="submit" value="Submit">
</form>
