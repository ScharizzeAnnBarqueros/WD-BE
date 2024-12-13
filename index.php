<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scha's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Imprima&family=Inder&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik+Glitch&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Imprima&family=Inder&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik+Glitch&display=swap"
        rel="stylesheet">

    <style>
        .main-content h1,
        .main-content h2 {
            color: #333;
        }

        .main-content p {
            color: #555;
        }

        /* Profile picture adjustments */
        .profilePic img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .main-content {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .profilePic img {
                max-width: 250px;
            }
        }

        @media (max-width: 800px) {
            .profilePic img {
                justify-content: center;
            }
        }

        .card {
            width: 100%;
            max-width: 300px;
            height: 400px;
            overflow: hidden;
            border-radius: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }


        .card:hover {
            transform: scale(1.05);
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image {
            height: 100%;
        }

        .content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .card:hover .content {
            transform: translateY(0);
        }

        .btn-card {
            background-color: #a1e3a1;
            color: #000;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-card:hover {
            background-color: #87c787;
        }
    </style>
</head>

<body>


    <div class="container-fluid "
        style="background:url('assets/Vector 3.png') no-repeat bottom,url('assets/Vector 4.png') no-repeat center; background-size: cover, cover; padding-bottom: 11%;">
        <div class="row pt-5 align-items-center d-flex">

            <div class="col-12 col-md-4 d-flex justify-content-center order-1 order-md-2 text-center">
                <div class="profilePic pt-5 mt-5">
                    <img src="assets/profilePic.png" alt="Profile Picture">
                </div>
            </div>

            <div class="col-12 col-md-8 main-content order-2 order-md-1" style="padding: 10%;">
                <div class="row mt-5 pt-2">
                    <h1 style="font-family: Playfair Display, serif; font-weight: 800;">Scharizze Ann Barqueros</h1>
                </div>
                <div class="row">
                    <h2 style="font-family: Hanken Grotesk, sans-serif;">IT Student</h2>
                </div>
                <div class="row">
                    <p style="font-family: Hanken Grotesk, sans-serif; font-size:large;">I am currently a third-year
                        student at the
                        Polytechnic University of the Philippines Santo Tomas, with a strong desire to learn new skills.
                        I have a passion for design and art, and I am dedicated to improving my creative abilities. In
                        the future. </p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid pb-5" style="background-color:#F98A7E;">
        <div class="row pt-5 " style="text-align:center;">
            <h1 class="px-5" style="font-family: Playfair Display, serif; font-weight: 800;">My Projects</h1>
        </div>

        <div class="row justify-content-center my-5" style="padding-left: 15%;padding-right: 15%;">

            <div class="col-12 col-sm-8 col-md-6 col-lg-4 py-3 d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="image">
                        <img src="assets/insideout.png" alt="Inside Out">
                    </div>
                    <div class="content">
                        <h2>Island Personality</h2>
                        <p>Step into the vibrant and diverse world of the Island of Personalities, where each island represents a unique facet of the human experience.</p>
                        <a href="A08/index.php" class="btn btn-card">Visit Site </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer
        style="background-color:#7EB0F9; padding:15px; font-family: Hanken Grotesk, sans-serif; text-align: center;">
        ©2024
        scharizzeannbarqueros.github.io</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>