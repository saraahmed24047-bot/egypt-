<?php

$pageTitle = "City Details";
$page = "cities";

include 'inc/header.php';


$city_id = $_GET['id'] ?? null;


if (!$city_id || !array_key_exists($city_id, $cities)) {

    header("Location: index.php");
    exit;

}


$city = $cities[$city_id];

?>


<section class="container my-5">

    <div class="row align-items-center">

        <!-- City Image -->

        <div class="col-md-6">

            <img
                src="images/<?= $city['img'] ?>"
                class="img-fluid rounded"
                alt="<?= $city['title'] ?>"
            >

        </div>


        <!-- City Information -->

        <div class="col-md-6">

            <h2 class="display-5 fw-bold">

                <?= $city['title'] ?>

            </h2>


            <p class="lead">

                <?= $city['desc'] ?>

            </p>


            <a
                href="index.php"
                class="btn btn-warning">

                Back to Home

            </a>

        </div>

    </div>

</section>


<?php

include 'inc/footer.php';

?>