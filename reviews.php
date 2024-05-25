<?php

include 'header.php';
include 'navbar.php';
include 'db.php';

?>

<div class="container my-5" >
<h1 class="my-3"><b><i><ins><center>Our Reviews</center></ins></i></b></h1>
<div class="alert" role="alert" style="border:3px solid black; border-radius: 10px;">
    <div class="head" >
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
<?php

    $query = "SELECT * FROM `asad_restaurant`";
    $run = mysqli_query($conn, $query);
    $id = 0;
    if($run){
        while ($row = mysqli_fetch_assoc($run)) {
            $id = $id + 1;
            // echo $row['email'];
    ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $id; ?></th>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['menu']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                </tr>
<?php
        }
    }
?>

            </tbody>
        </table>
   </div>
   </div>
</div>


<?php

include 'footer.php';

?>