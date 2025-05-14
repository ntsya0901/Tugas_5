<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['user'];

if (isset($_POST['tambah'])) {
    $task = $_POST['todo'];
    $stmt = $conn->prepare("INSERT INTO todos (task, username) VALUES (?, ?)");
    $stmt->bind_param("ss", $task, $username);
    $stmt->execute();
}

if (isset($_GET['selesai'])) {
    $id = (int)$_GET['selesai'];
    $conn->query("UPDATE todos SET status='done' WHERE id=$id AND username='$username'");
}

if (isset($_GET['hapus'])) {
    $id = (int)$_GET['hapus'];
    $conn->query("DELETE FROM todos WHERE id=$id AND username='$username'");
}

header("Location: index.php");
exit;
