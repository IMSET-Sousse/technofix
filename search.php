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
    <title>Search Results</title>
</head>
<body>
    <div class="container header-nav">
        <?php include 'navbar/navbar.php'; ?>
    </div>
    <div class="hero">
        <div class="container">
            <div class="container-fluid list">
                <?php
                include 'database/db.php';

                // Check if the search term is provided via GET request
                if (isset($_GET['searchTerm'])) {
                    $searchTerm = $_GET['searchTerm'];

                    // Perform a database query to search for products
                    // Replace 'products' and 'search_column' with your actual table and column names
                    $query = "SELECT * FROM product WHERE title LIKE ?";
                    $stmt = $conn->prepare($query);

if (!$stmt) {
    die("Error: " . $conn->error); // Print the error message
}
                    $searchTerm = "%" . $searchTerm . "%"; // Add wildcard characters for partial matching
                    $stmt->bind_param("s", $searchTerm);
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
                        echo '<p class="error"> No products found for your search term </p>';
                    }

                    // Close the database connection
                    mysqli_close($conn);
                } else {
                    echo 'Search term not specified.';
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'footer/footer.php'; ?>
</body>
</html>