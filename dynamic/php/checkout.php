<?php

session_start();

include("header.php");
include("data.php");
include("connect.php");
?>

<head>
    <link rel="stylesheet" href="../css/checkout.css?<?php echo time(); ?>" />
</head>

<!-- Page content  -->
<div class="page-content" id="content">
    <!-- Menu button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill px-4 position-fixed m-5">
        <i class="fa fa-bars fa-fw"></i><small class="text-uppercase font-weight-bold">Menu</small>
    </button>

    <!-- Checkout -->
    <div class="container mt-4">
        <main class="p-5 pt-2">
            <div class="py-5 text-center">
                <h2 class="p-3 bg-warning rounded-pill w-25 mx-auto">Checkout</h2>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-warning">Your cart</span>
                        <!-- Counts the number of products in the cart -->
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $poc = count($_SESSION['cart']);
                            echo "<span class='badge bg-warning rounded-pill'>$poc</span>";
                        } else {
                            echo ' <span class="badge bg-warning rounded-pill">3</span>';
                        }
                        ?>
                    </h4>
                    <ul class="list-group mb-3">
                        <!-- Print all products from the cart -->
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $total = 0;

                            foreach ($_SESSION['cart'] as $key  => $product) {
                                $product = $product - 1;
                                echo '<li class="list-group-item d-flex justify-content-between lh-sm">';
                                echo '<div>';
                                echo "<h6 class='my-0'>$names[$product]</h6>";
                                echo '</div>';
                                echo "<span class='text-muted'>$prices[$product] €</span>";
                                echo '</li>';
                                $total += $prices[$product];
                            }
                        }


                        /*  Using promo code  */
                        $totalPromo = $total;
                        $sqlconn = mysqli_query($conn, "SELECT * FROM coupons");

                        while ($row = mysqli_fetch_array($sqlconn)) {
                            $codes[] = $row['coupnon_name'];
                        }

                        if (isset($_POST['reedem'])) {
                            $userPromoCode = $_POST['userPromoCode'];

                            if (in_array($userPromoCode, $codes)) {
                                $totalPromo = 80 * $total / 100;
                            }
                        }

                        ?>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (€)</span>
                            <strong><?php echo "$total €"; ?> </strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total with promo code (€)</span>
                            <strong><?php echo "$totalPromo €"; ?> </strong>
                        </li>
                    </ul>

                    <form class="card p-2" action="checkout.php" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="userPromoCode" placeholder="Promo code">
                            <button type="submit" name="reedem" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>

                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" method="POST" action="checkout.php" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder=""
                                    value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder=""
                                    value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span
                                        class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" name="country" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                    <option>Europe</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" name="state" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>SLovakia</option>
                                    <option>Poland</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" name="postal_code" id="zip" placeholder=""
                                    required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info" required>
                            <label class="form-check-label" for="save-info">I agree to the terms</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked
                                    required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-warning btn-lg" name="finish_button" type="submit">Finish
                            order</button>
                    </form>
                </div>
                <?php
                /*  Sending data to database  */
                if (isset($_POST['finish_button'])) {
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $country = $_POST['country'];
                    $state = $_POST['state'];
                    $postal_code = $_POST['postal_code'];

                    $sql = "INSERT INTO orders (price_€, first_name,last_name,email,address,country,state,postal_code) 
                    VALUES ('$total', '$firstName', '$lastName', '$email', '$address','$country', '$state', '$postal_code')";

                    if (mysqli_query($conn, $sql)) {
                        /* echo "New record created successfully"; */
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                }


                ?>
            </div>
        </main>
    </div>
    <script src="../js/checkout.js"></script>
    <?php
    include("footer.php");
    ?>