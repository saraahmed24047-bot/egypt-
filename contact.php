<?php

$pageTitle = "Contact Us";
$page = "contact";

include 'inc/header.php';

?>

<style>

.contact-section {
    padding: 60px 20px;
    background-color: #f8f9fa;
    min-height: 70vh;
}

.contact-box {
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
}

.contact-box h2 {
    margin-bottom: 10px;
}

.contact-box p {
    color: #666;
}

.contact-box .form-control {
    border-radius: 8px;
}

.contact-box .form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
}

.contact-btn {
    transition: 0.3s ease;
}

.contact-btn:hover {
    transform: translateY(-2px);
}

</style>


<!-- Contact Us -->

<section class="contact-section">

    <div class="contact-box">

        <h2 class="text-center">
            📞 Contact Us
        </h2>

        <p class="text-center mb-4">
            Have a question? Send us a message.
        </p>


        <form action="#" method="post">

            <!-- Name -->

            <div class="mb-3">

                <label for="name" class="form-label">
                    Name
                </label>

                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    required
                >

            </div>


            <!-- Email -->

            <div class="mb-3">

                <label for="email" class="form-label">
                    Email
                </label>

                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >

            </div>


            <!-- Message -->

            <div class="mb-3">

                <label for="message" class="form-label">
                    Message
                </label>

                <textarea
                    class="form-control"
                    id="message"
                    name="message"
                    rows="5"
                    placeholder="Write your message..."
                    required
                ></textarea>

            </div>


            <!-- Button -->

            <div class="text-center">

                <button
                    type="submit"
                    class="btn btn-outline-primary px-5 contact-btn">

                    Send Message

                </button>

            </div>

        </form>

    </div>

</section>


<?php

include 'inc/footer.php';

?>