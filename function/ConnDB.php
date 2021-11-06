<?php
    function connectDB($hm,$user,$psw,$dbname){
        echo "<p>FUNCTION $hm,$user,$psw,$dbname</p>";
            return new mysqli($hm,$user,$psw,$dbname);
    }
?>