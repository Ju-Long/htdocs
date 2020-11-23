<?php
include 'dbFunctions.php';
if($link->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT first_name, last_name, username, email, role
FROM users WHERE id = (?)";

$stmt = $link->prepare($sql);
$stmt->bind_param("d", $_GET['n']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($firstname, $lastname, $username, $email, $role);
$stmt->fetch();
$stmt->close();

$message = "";
$message .= "<table>";
$message .= "<tr>";
$message .= "<th>First Name</th>";
$message .= "<th>Last Name</th>";
$message .= "<th>Username</th>";
$message .= "<th>Email</th>";
$message .= "<th>Role</th>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>" . $firstname . "</td>";
$message .= "<td>" . $lastname . "</td>";
$message .= "<td>" . $username . "</td>";
$message .= "<td>" . $email . "</td>";
$message .= "<td>" . $role . "</td>";
$message .= "</tr>";
$message .= "</table>";

echo $message;
?>
