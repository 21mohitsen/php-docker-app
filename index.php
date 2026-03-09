<?php
include 'db.php';

if(isset($_POST['name'])){
    $name=$_POST['name'];

    $sql="INSERT INTO users(name) VALUES('$name')";
    mysqli_query($conn,$sql);
}
?>

<h2>Enter Name</h2>

<form method="POST">
<input type="text" name="name">
<button type="submit">Submit</button>
</form>

<h3>Saved Names</h3>

<?php
$result=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result)){
echo $row['name']."<br>";
}
?>
