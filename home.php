<?php
session_start();
include('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Bienvenido a mi app, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="logout.php" class="btn btn-primary">Logout</a>
    <h3>Usuarios registrados en mi app:</h3>
    <div class="row">
        <?php while ($user = $result->fetch_assoc()): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo htmlspecialchars($user['username']); ?></h4>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>