$hostname ="localhost";
$username = "root";
$password = "";
$database="hng";

$conn = new mysqli($hostname, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";
$sql = "CREATE DATABASE hng";
if ($conn->query($sql) === true) {
  echo "Database created successfully";
} 
else {
  echo "Error creating Database: " . $conn->error;
}
$conn->close();
//created database
// Create new connection
$conn = new mysqli($hostname, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";


$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";

//Create the user table
/** I intensionally used varchar as datatype of time, 
 * so we save the return value of time() function by doing this we will be able to manipulate as needed.
*/
$sql = "CREATE TABLE users (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`firstname` varchar(128) NOT NULL,
    `lastname`  varchar(128) NOT NULL,
 	`password`  varchar(128) NOT NULL,
    `username`  varchar(128) NOT NULL,
	`email` varchar(128) NOT NULL,
	`time` varchar(128) NOT NULL,
	PRIMARY KEY (id)
)";
if ($conn->query($sql) === true) {
  echo "Table Users created successfully";
} 
else {
  echo "Error creating table: " . $conn->error;
}

//Create the mentor table
$sql = "CREATE TABLE mentors (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`userId` int(11) NOT NULL,
	`time` varchar(128) NOT NULL,
	`totalTasks` int(11)  NOT NULL,
	`failed` int(11)  NOT NULL,
	`passed` int(11) NOT NULL,
	PRIMARY KEY (id)
)";
if ($conn->query($sql) === true) {
    echo "Table mentors created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}
// Create the interns table
$sql = "CREATE TABLE interns (
	`id` int(11) NOT NULL AUTO_INCREMENT,  
	`userId` int(11) NOT NULL,
	`time` varchar(128) NOT NULL,
	`totalTasks` int(11)  NOT NULL,
	`pendingTasks` int(11)  NOT NULL,
	`resolvedTasks` int(11) NOT NULL,
	PRIMARY KEY (id)
)";
if ($conn->query($sql) === true) {
    echo "Table interns created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}


echo "All is set now";
$conn->close();
?>
