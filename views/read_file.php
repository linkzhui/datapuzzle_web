<?php  
        $file = fopen("adminUser.txt", "r");
        $username = "";
        $password = "";
        if(!feof($file))
        {
            $username = fgets($file);
        }
        if(!feof($file))
        {
            $password = fgets($file);
        }
        fclose($file);
        echo $username;
        echo "string";
        ?>