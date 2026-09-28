<?php

$pageTitle = "About Egypt";
$page = "about";

include 'inc/header.php';

?>

<style>

.about-section {
    padding: 50px 0;
}

.about-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.about-title {
    margin-bottom: 40px;
}

</style>


<!-- About Egypt -->

<section class="about-section">

    <div class="container">


        <!-- Title -->

        <div class="about-title text-center">

            <h2 class="fw-bold">
                🏛️ About Egypt
            </h2>

            <p class="text-muted">
                Discover the history, culture and beauty of Egypt.
            </p>

        </div>


        <!-- Introduction -->

        <div class="row align-items-center mb-5">

            <div class="col-md-6">

                <div class="card about-card shadow-sm">

                    <div class="card-body p-4">

                        <h3 class="fw-bold text-warning">
                            Discover Egypt
                        </h3>

                        <p>
                            Egypt is a country famous for its ancient
                            history, rich culture and beautiful
                            tourist destinations.
                        </p>

                        <p>
                            Visitors can explore the Pyramids,
                            the Nile River, ancient temples,
                            museums and beautiful beaches.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-6 mt-4 mt-md-0">

                <div class="card about-card shadow-sm">

                    <div class="card-body p-4">

                        <h3 class="fw-bold text-warning">
                            Egyptian History
                        </h3>

                        <p>
                            Ancient Egypt was one of the world's
                            earliest civilizations.
                        </p>

                        <p>
                            The ancient Egyptians created impressive
                            monuments and made important contributions
                            to architecture, art, science and writing.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- Famous Attractions -->

        <h3 class="text-center fw-bold mb-4">
            ⭐ Famous Attractions
        </h3>


        <div class="row">


            <!-- Pyramids -->

            <div class="col-md-4 mb-4">

                <div class="card about-card h-100 shadow-sm">

                    <div class="card-body text-center">

                        <h4 class="fw-bold">
                            🏛️ Pyramids
                        </h4>

                        <p>
                            The Pyramids of Giza are among the
                            most famous ancient monuments in Egypt.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Nile -->

            <div class="col-md-4 mb-4">

                <div class="card about-card h-100 shadow-sm">

                    <div class="card-body text-center">

                        <h4 class="fw-bold">
                            🌊 The Nile
                        </h4>

                        <p>
                            The Nile River is an important part
                            of Egypt's history and culture.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Temples -->

            <div class="col-md-4 mb-4">

                <div class="card about-card h-100 shadow-sm">

                    <div class="card-body text-center">

                        <h4 class="fw-bold">
                            🏺 Ancient Temples
                        </h4>

                        <p>
                            Luxor and Aswan are famous for their
                            ancient temples and historical sites.
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<?php

include 'inc/footer.php';

?>