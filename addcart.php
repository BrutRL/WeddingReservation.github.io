<?php
ob_start();
session_start();
$connection = mysqli_connect("localhost", "root", "", "productdb");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'], "id");
        if(!in_array($_GET['id'],$session_array_id)){
            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );
            $_SESSION['cart'][] = $session_array;
        }
    }else{
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
    }
}

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="addCart.css">
</head>
<body>
<header>
            <h2 class="title">Vows & Veils Wedding</h2>
            <nav class="mainNav">
                <a href="UserFile\userDomain.php">Home</a>
                <a href="UserFile\userDomain.php#food">Services</a>
                <a href="UserFile\userDomain.php#contactUs">Contact Us</a>
                <a href="UserFile\userfeedback.php">Feedbacks</a>
            </nav>
        </header>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Reservation Section</h2>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="col-md-4">
                                    <form method="post" action="addcart.php?id=<?= $row['id'] ?>">
                                        <h5 class="text-center"><?= $row['name']; ?></h5>
                                        <h5 class="text-center"><?= number_format($row['price'],2);?></h5>
                                        <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                        <input type="number" name="quantity" value="1" class="form-control">
                                        <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Reserve">
                                    </form>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Item Selected</h2>
                    <?php
                    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        $total = 0;
                        ?>
                        <table class='table table-bordered table-striped'>
                            <tr>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            foreach($_SESSION['cart'] as $key => $value){
                                $total += $value['quantity'] * $value['price'];
                                ?>
                                <tr>
                                    <td><?= $value['id']; ?></td>
                                    <td><?= $value['name']; ?></td>
                                    <td><?= $value['price']; ?></td>
                                    <td><?= $value['quantity']; ?></td>
                                    <td><?= number_format($value['price'] * $value['quantity'], 2); ?></td>
                                    <td>
                                        <a href='addcart.php?action=remove&id=<?= $value['id']; ?>'>
                                            <button class='btn btn-danger btn-block'>Remove</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr>
                                <td colspan='3'></td>
                                <td><b>Total Price</b></td>
                                <td><?= number_format($total, 2); ?></td>
                                <td>
                                    <a href='addcart.php?action=clearall'>
                                        <button class='btn btn-warning btn-block'>Clear All</button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <?php
                    } else {
                        echo "<p>No items selected</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <form action="addcart.php" method="post">
        <input type="text" name="clientName" placeholder="Enter your name Here" class="clName">
        <input type="Submit" name="reserve" class="btnSubmit">
    </form>
    </div>
    <?php
    if(isset($_POST['reserve'])) {
        if(empty($_POST['clientName'])) {
            echo "<script> 
            let text = document.querySelector('clName');
             text.textContent = 'Please Input Name'
            </script>";
        } else {
            $_SESSION['clientOrders'][$_POST['clientName']] = $_SESSION['cart'];
            unset($_SESSION['cart']);
            ob_end_clean(); 
            header("Location: addcart.php");
            exit();
        }
    }
    ?>
    <?php
    if(isset($_GET['action'])){
        if($_GET['action'] == "clearall"){
            unset($_SESSION['cart']);
            header("Location: addcart.php");
            exit();
        }
        if($_GET['action'] == "remove"){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['id'] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    header("Location: addcart.php");
                    exit();
                }
            }
        }
    }
    ?>
</body>
</html>
<?php
mysqli_close($connection);
?>
