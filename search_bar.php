<?php
require './config.php'; // Include your database connection file
$searchQuery = $_GET['query'];
$sql = "SELECT * FROM products WHERE name LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Search Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h2>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="<?php echo './assets/img/' . $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <p class="card-text"><?php echo substr($row['description'], 0, 100); ?>...</p>
                                <a href="single-product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <p class="col-12">No products found matching your query.</p>
            <?php } ?>
        </div>
    </div>
</body>
</html>
