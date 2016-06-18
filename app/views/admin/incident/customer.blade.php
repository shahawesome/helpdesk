<?php
// connect to database
include "dbConnect.php";
 
// retrieve list of users and put it in the select box
$query = "SELECT id, firstname, lastname, username FROM users";
$stmt = $con->prepare( $query );
$stmt->execute();
 
//this is how to get number of rows returned
$num = $stmt->rowCount();
 
// make sure there are records on the database
if($num > 0){
 
// this will create selec box / dropdown list with user records
echo "<select id='users'>";
 
    // make a default selection
    echo "<option value='0'>Select a user...</option>";
     
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        echo "<option value='{$id}'>{$firstname} {$lastname}</option>";
    }
echo "</select>";
     
}
 
// if no user records
else{
    echo "<div>No records found</div>";
}
 
// this is where the related info will be loaded
echo "<div id='userInfo'></div>";
?>