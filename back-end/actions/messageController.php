<?php 
$conexion = MySQLi_connect(
    "localhost", //Server host name
    "root", //Database username
    "", //Database password
    "Instagram" //Database name 
);
//Check connection
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}

/**********/

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['search'];
    //Search query.
       $Query = "SELECT userName FROM users WHERE userName LIKE '%$Name%' LIMIT 5";
    //Query execution
       $ExecQuery = MySQLi_query($conexion, $Query);
    //Creating unordered list to display result.
       echo '<ul>';
       //Fetching result from database.
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
       <li onclick='fill("<?php echo $Result['userName']; ?>")'>
       <a>
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           <?php echo $Result['userName']; ?>
       </li></a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>
    </ul>