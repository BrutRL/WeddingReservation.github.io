<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of User</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="allstyle.css">
    <link rel="stylesheet" href="list.css">
    <div class="header">
        <h1 class="admin"> Admin Panel</h1> <br>
        <nav>
            <a href="adminDomain.php">Home</a>
            <a href="listuser.php">User</a>
            <a href="Productlist.php">Product</a>
            <a href="Order.php">Orders</a>
            <a href="feedback.php">Feedback</a>
            <a href="../admin.php">Log Out</a>
        </nav>
    </div>
</head>
<body>
    <div class="main">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $db_server = "localhost";
                    $db_user = "root";
                    $db_pass = "";
                    $db_name = "clientdb";

                    $db_connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

                    $query = "SELECT * FROM clients ";
                    $result = $db_connection->query($query);
                    if(!$result){
                        echo "Invalid Query";
                    }
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                        <td>" .$row["clientid"]. "</td> 
                        <td>" .$row["customeremail"]. "</td>
                        <td>" .$row["FirstName"]. "</td>
                        <td>" .$row["LastName"]. "</td>
                        </tr>" ;
                    }
                    try {
                        if (isset($_POST['btnUpdate'])) {
                            $id = $_POST['id'];
                            $email = $_POST['email'];
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $password = $_POST['password'];
                    
                            if (!preg_match('/^[a-zA-Z\s]+$/', $firstname)) {
                                throw new Exception("First name must contain only letters and spaces");
                            }

                            if (preg_match('/[0-9]/', $lastname)) {
                                throw new Exception("Last name cannot contain numbers");
                            }

                            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                throw new Exception("Invalid email format");
                            }

                            if (substr($email, -10) !== "@gmail.com") {
                                throw new Exception("Email must end with '@gmail.com'");
                            }

                            if (strlen($password) < 8) {
                                throw new Exception("Password must be at least 8 characters long");
                            }

                            if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
                                throw new Exception("Password must contain at least one special character");
                            }

                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                            $sql = "UPDATE clients SET customeremail='$email', FirstName='$firstname', LastName='$lastname', password='$hashed_password' WHERE clientid=$id";
                            if (mysqli_query($db_connection, $sql)) {
                                echo "Record updated successfully";
                                echo "<meta http-equiv='refresh' content='0'>";
                            } else {
                                echo "Error updating record: " . mysqli_error($db_connection);
                            }
                        }
                    } catch (Exception $e) {
                        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
                    }
                   
                    try{
                        if (isset($_POST['btnDelete'])) {
                            $id = $_POST['id'];
                        
                            $sql = "DELETE FROM clients WHERE clientid=$id";
                        
                            if (mysqli_query($db_connection, $sql)) {
                                echo "Record deleted successfully";
                                echo "<meta http-equiv='refresh' content='0'>";
                            } else {
                                echo "Error deleting record: " . mysqli_error($db_connection);
                            }
                        }
                    }catch(Exception $e){
                        echo "<script> alert('Id field is the one needed')</script>";
                    }
                      
                    
                  
                    ?>
                </tbody>
            </table>
        </div>

        <div class="crud">
        <form method="post" action="listuser.php">
            
            <input type="text" placeholder="Id" name="id"  value="<?php echo isset($_POST['id']) ? htmlspecialchars($_POST['id']) : ''; ?>">
           <input type="text" placeholder="First Name" name="firstname" value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>">
            <input type="text" placeholder="Last Name" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>">
            <input type="email" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <input type="password" placeholder="Password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
            <button type="submit" name="btnUpdate">Update</button>
            <button type="submit" name="btnDelete" style=" background-color: #ff6347;">Delete</button>
            
        </form>
        </div>
    </body>
</html>
