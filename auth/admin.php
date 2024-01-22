<head>
    <link rel="stylesheet" href="../templates/css/style.css">
    <link rel="stylesheet" href="../templates/css/form.css">
    <link rel="stylesheet" href="../templates/css/cart.css">
</head>

<?php 
require_once '../service/connect.php';

$sql = "SELECT * FROM `cake`";
$result = mysqli_query($conn, $sql);
$cartItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo "<span id='table-text'><h1>Admin dashboard</h1></span>";
    echo "<table id='product-table'>";
    echo "<thead><tr><th>ID</th><th>Name</th><th>Price</th><th>Action</th></tr></thead>";
    echo "<tbody>";

    foreach ($cartItems as $item) { 
        echo "<tr>
        <td>{$item['product_id']}</td>
        <td>{$item['product_name']}</td>
        <td>£{$item['product_price']}</td>
        
        <td>";

        // Delete Button
        echo "<div>
            <form method='POST' action='./admin.php'>
                <input type='hidden' name='product_id' value='{$item['product_id']}'>
                <input type='hidden' name='action' value='delete'>
                <button type='submit' class='remove-from-cart'>Remove</button>
            </form> 
        </div>
        
        <div>
            <input type='hidden' name='product_id' value='update_product({$item['product_id']})'>
            <button type='submit'class='change-btn' onclick='showDeliveryForm();'>Customize</button>
        </div>";
        echo "</td>";
        echo "</tr>";
    }

    function update_product($id) {

    }
    echo "
        <div id='delivery-form' class='popup-form'>
            <div class='popup-form-content'>
                <span class='close' onclick='closeDeliveryForm()'>&times;</span>
                <h2>Delivery Information</h2>
                <form method='post' action='./admin.php'>
                    <label for='name'>Product name:</label>
                    <input type='text' id='name' name='name' required>

                    <label for='description'>Product description:</label>
                    <textarea id='description' name='description' rows='4' required  value='{$el['product_id']}'></textarea>";
                

                    foreach ($cartItems as $el) { 
                        echo $el["product_id"];
                    }

                    echo "<label for='number'>Product price:</label>
                    <input type='number'required >

                    <button type='submit'>Confirm updating</button>
                </form>
            </div>
        </div>";

    echo "<script src='../components/form.js'></script>";

    echo "</tbody>";
    echo "</table>";