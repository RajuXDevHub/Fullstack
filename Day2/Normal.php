
<?php
    $id = $_POST["name"];
    $Pass = $_POST["password"];
    $Email = $_POST["email"];

    if( $id =="" || $Pass==""){
        echo"You Missed to fill Id And Pass<br>
        <a href='index.html'>Home Page </a>";
    }else{
        
        echo "You Have successfully Submitted the form";
        
        
        
        echo
        "
            <br>
            Your Name is :- $id<br>
            Your password is :- $Pass<br>
            Your Email is :- $Email<br>
        ";
    }


?>