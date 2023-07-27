<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
<div class="container my-5">
    <form method="post">
        <input type="text" placeholder="search data" name="search">
        <button class="btn btn-dark btn-sm" name="submit">Search</button>
    </form>

    <div class="container my-5"></div>
    <?php
    if(isset($_POST['submit']) && isset($_POST['search'])){
        $search=$_POST['search'];

        $sql="SELECT * FROM `reservation` WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%'";
        $result=mysqli_query($con,$sql);
        if($result){
            if(mysqli_num_rows($result)>0){
                echo '<table class="table">
                <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Duration</th>
                <th>Check in</th>
                <th>Check out</th>
                <th>Car selected</th>
                <th>Message</th>
                <th>Created at</th>
                </tr>
                </thead>';
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tbody>
                        <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>'.$row['duration'].'</td>
                        <td>'.$row['checkin'].'</td>
                        <td>'.$row['checkout'].'</td>
                        <td>'.$row['carselection'].'</td>
                        <td>'.$row['message'].'</td>
                        <td>'.$row['created_at'].'</td>
                        </tr>
                    </tbody>';
                     }
                    echo '</table>';
                } else {
                    echo '<h2 class="text-danger">Data not found</h2>';
                }
            }
        }
    ?>
</div>
</body>
</html>
