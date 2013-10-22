<!DOCTYPE html>
<!-- test to see if at home upload worked-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            $usernameValue = "";
            $passwordValue = "";
            
            $usernameErr = "";
            $passwordErr = "";
        ?>
        
        <form name="mainform" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">            
            <label>UserName</label> <input type="text" name="username" value="<?php echo $usernameValue;?>" /> <?php echo $usernameErr ?> <br />
            <label>Password</label> <input type="password" name="password" value="" /> <?php echo $passwordErr ?> <br />
            
            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>