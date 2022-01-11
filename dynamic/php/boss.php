<?php

include("header.php");
include("connect.php");

$data = mysqli_query($conn, "SELECT * FROM employees ");

while ($row = mysqli_fetch_array($data)) {
    $id[] = $row['id'];
    $first_name[] = $row['first_name'];
    $last_name[] = $row['last_name'];
    $age[] = $row['age'];
    $gender[] = $row['gender'];
    $height_cm[] = $row['height_cm'];
    $weight_kg[] = $row['weight_kg'];
    $income_€[] = $row['income_€'];
    $year_of_entry[] = $row['year_of_entry'];
    $kids[] = $row['kids'];
    $location[] = $row['location'];
}
?>

<!-- Page content  -->
<div class="page-content" id="content">
    <!-- Menu button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill px-4 position-fixed m-5">
        <i class="fa fa-bars fa-fw"></i><small class="text-uppercase font-weight-bold">Menu</small>
    </button>

    <!-- Table -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="mb-5 p-2 text-center bg-warning w-50 mx-auto rounded-pill">
                <h2 class=" w-100">Table of our employees</h2>
            </div>
            <div class="col-sm-3 col-md-8 col-lg-10 mx-auto">
                <table class="table table-striped table-hover bg-white border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">age</th>
                            <th scope="col">gender</th>
                            <th scope="col">height_cm</th>
                            <th scope="col">weight_kg</th>
                            <th scope="col">income_€</th>
                            <th scope="col">year_of_entry</th>
                            <th scope="col">kids</th>
                            <th scope="col">location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Print a table of employees from the database  -->
                        <?php
                        foreach ($data as $value => $one) {
                            echo '<tr>';
                            echo "<th scope='row'>$id[$value]</th>";
                            echo "<td>$first_name[$value]</td>";
                            echo "<td>$last_name[$value]</td>";
                            echo "<td>$age[$value]</td>";
                            echo "<td>$gender[$value]</td>";
                            echo "<td>$height_cm[$value]</td>";
                            echo "<td>$weight_kg[$value]</td>";
                            echo "<td>$income_€[$value]</td>";
                            echo "<td>$year_of_entry[$value]</td>";
                            echo "<td>$kids[$value]</td>";
                            echo "<td>$location[$value]</td>";
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of Table -->

    <?php
    include("footer.php");
    ?>