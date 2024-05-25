<?php

include 'header.php';
include 'navbar.php';
include 'db.php';

?>

<!-- Contct Us Start -->

<div class="container my-5">
    <div class="alert" role="alert" style="background-color: #96b3e0;border-radius: 17px;">
        <h1><b><ins><center>Contact Us</center></ins></b></h1>
        <div class="head my-3">
        <form action="contactpage.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    <b>Your Email:-</b>
                </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
            </div>
            <div class="options">
                <label for="select" class="mb-2">
                    <b>Select Your Choice</b>
                </label>
                <br>
                <select class="form-select" aria-label="Default select example" name="select">
                    <option selected>Open this select menu</option>
                    <option value="Pizza">Pizza</option>
                    <option value="Burger">Burger</option>
                    <option value="Shawarma">Shawarma</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label mt-2"><b>Detailed Description</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Please write a detailed description about your thing." required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<!-- Contact Us End -->


<?php

include 'footer.php';

?>