<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['user'];
$todos = $conn->query("SELECT * FROM todos WHERE username='$username'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1><?= htmlspecialchars($username) ?></h1>
    <img src="foto.jpg" width="100">
    <a href="logout.php">Logout</a>
</header>

<form action="process.php" method="POST">
    <input type="text" name="todo" required placeholder="Teks to do...">
    <button type="submit" name="tambah">Tambah</button>
</form>

<ul>
    <?php while ($row = $todos->fetch_assoc()): ?>
        <li style="<?= $row['status'] === 'done' ? 'text-decoration: line-through; color: gray;' : '' ?>">
            <?= htmlspecialchars($row['task']) ?>
            <?php if ($row['status'] !== 'done'): ?>
                <a href="process.php?selesai=<?= $row['id'] ?>">Selesai</a>
            <?php endif; ?>
            <a href="process.php?hapus=<?= $row['id'] ?>">Hapus</a>
        </li>
    <?php endwhile; ?>
</ul>
</body>
</html>
