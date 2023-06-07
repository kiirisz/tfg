<?php 
$messageConexion = MySQLi_connect(
    "localhost", //Server host name
    "root", //Database username
    "", //Database password
    "Instagram" //Database name 
);
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}

if (isset($_POST['search'])) {
       $Name = $_POST['search'];
       $Query = "SELECT userName FROM users WHERE userName LIKE '%$Name%' LIMIT 5";
       $ExecQuery = MySQLi_query($messageConexion, $Query);
       echo '<ul>';
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
           ?>
       <li onclick='fill("<?php echo $Result['userName']; ?>")'>
       <a>
           <?php echo $Result['userName']; ?>
       </li></a>
       <?php
    }}
    ?>
    </ul>