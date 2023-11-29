<?php
include __DIR__ . '/../Model/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- link to Font-Family and CSS Files -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Document Title -->
    <title>Hotels</title>
</head>

<body>
    <div>
        <header class="container">
            <h1>Hotels</h1>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand">Navbar</a>
                    <form class="d-flex" role="search" method="GET">
                        <select name="parking" class="form-select" aria-label="Default select example">
                            <option value="1">Parking available</option>
                            <option value="0">Parking not available</option>
                        </select>
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>