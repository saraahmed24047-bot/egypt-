<?php

$pageTitle = "Home";
$page = "home";

include 'inc/header.php';

?>

<style>

.city-card .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.city-card .card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25) !important;
}

</style>


<!-- Carousel -->

<div id="tourCarousel"
     class="carousel slide"
     data-bs-ride="carousel"
     data-bs-interval="3000">

    <div class="carousel-inner">

        <?php foreach ($slides as $index => $slide): ?>

            <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">

                <img
                    src="images/<?= $slide ?>"
                    class="d-block w-100"
                    alt="Egypt Tour"
                    style="height: 450px; object-fit: cover;"
                >

            </div>

        <?php endforeach; ?>

    </div>


    <!-- Previous Button -->

    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#tourCarousel"
        data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>


    <!-- Next Button -->

    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#tourCarousel"
        data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>



<!-- Cities -->

<section class="container my-5">

    <h2 class="text-center mb-4">
        Explore Egypt
    </h2>


    <div class="row">

        <?php foreach ($cities as $city_id => $city): ?>

            <div class="col-md-3 col-sm-6 mb-4 city-card">

                <div class="card h-100 shadow">

                    <img
                        src="images/<?= $city['img'] ?>"
                        class="card-img-top"
                        alt="<?= $city['title'] ?>"
                        style="height: 200px; object-fit: cover;"
                    >


                    <div class="card-body d-flex flex-column">

                        <h5 class="card-title">
                            <?= $city['title'] ?>
                        </h5>


                        <p class="card-text">
                            <?= $city['desc'] ?>
                        </p>


                        <a
                            href="details.php?id=<?= $city_id ?>"
                            class="btn btn-outline-primary mt-auto">

                            Learn More

                        </a>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>



<?php

include 'inc/footer.php';

?>