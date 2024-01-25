<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <link href="productlist.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product List</title>
</head>
<body>
    <div class="container header-nav">
        <?php include 'navbar/navbar.php'; ?>
    </div>
    <div class="hero">
    <div class="container">

    
        
        <?php
        include 'database/db.php';

        // Get the selected category from the query parameter
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            echo '<h1>'. $category . ' List</h1>';
            echo '<div class="container-fluid list">';

            $query = "SELECT * FROM product WHERE category = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $category);
            $stmt->execute();
            $result = $stmt->get_result();

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Display product information here, e.g., name, image, description
                    echo "<div class='card' style='width: 18rem;'>";
                    echo "<img src='" . $row["image"] . "' class='card-img-top' alt='product'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row["title"] . "</h5>";
                    echo "<p class='card-text'>" . $row["description"] . "</p>";
                    echo "<p class='card-text'> <b>" . $row["price"] . "DT </b> </p>";
                    echo "<a href='#' class='btn btn-primary'>Purchase</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo 'No products available for this category.';
            }

            // Close the database connection
            mysqli_close($conn);
        } else {
            echo 'Category not specified.';
        }
        ?>
        </div>
    </div>
    </div>

        <?php include 'footer/footer.php'; ?>
</body>
</html>