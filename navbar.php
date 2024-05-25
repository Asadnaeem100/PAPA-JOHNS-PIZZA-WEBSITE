<?php

include 'header.php';
include 'db.php';

?>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light" style="background-color: #5a7aad;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="index.php">Asad's Pizza <i class="fa-solid fa-pizza-slice fa-beat fa-lg"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="reviews.php">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->