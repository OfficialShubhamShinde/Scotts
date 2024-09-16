<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Select Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Scott logo.png" rel="icon">
</head>
<style>
    a{
        text-decoration: none;
    }
</style>

<body>
    <div class="nav" style="background-color: rgb(14,22,41); color: white;">
        <div class="container">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2  ">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="Scott logo.png" width="60px" height="60px" alt="">
                    </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 link-secondary text-white"><b>Home</b></a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About Scott's</a></li>
                    <div class="dropdown">
                        <a href="#" class="nav-link px-2" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="flex items-center">
                                <span class="text-white">Services</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" class="text-white" height="16"
                                    fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                                </svg>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Lawn Mowers</a></li>
                            <li><a class="dropdown-item" href="">Lawn Tractors</a>
                            </li>
                            <li><a class="dropdown-item" href="">Pressure Washers
                                </a></li>
                            <li><a class="dropdown-item" href="">Snowblowers</a></li>
                            <li><a class="dropdown-item" href="">Snow Sweepers</a></li>
                            <li><a class="dropdown-item" href="">Edgers</a></li>
                            <li><a class="dropdown-item" href="">Weed Eaters</a>
                            </li>
                            <li><a class="dropdown-item" href="">Backpack Blowers</a></li>
                            <li><a class="dropdown-item" href="">Chainsaws</a></li>
                            <li><a class="dropdown-item" href="">Rotto Tillers</a></li>
                            <li><a class="dropdown-item" href="">Generators</a></li>
                            <li><a class="dropdown-item" href="">Power Trowels</a></li>
                            <li><a class="dropdown-item" href="">Compactors</a></li>
                            <li><a class="dropdown-item" href="">Serving: BC/Hamilton & Calgary AB</a></li>
                            <li><a class="dropdown-item" href="">Abbotsford Chilliwack Mission</a></li>
                            <li><a class="dropdown-item" href="">Maple Ridge Coquitlam Port</a></li>
                            <li><a class="dropdown-item" href="">Coquitlam Burnaby</a></li>
                            <li><a class="dropdown-item" href="">Pitt Meadows Langley Langley</a></li>
                            <li><a class="dropdown-item" href="">Township Surrey White Rock</a></li>
                            <li><a class="dropdown-item" href="">Vancouver</a></li>

                        </ul>
                    </div>

                    <li></li>
                    <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2 text-white">Sign-in</button>
                    <button type="button" class="btn btn-primary text-white">Sign-up</button>
                </div>
            </header>
        </div>
    </div>

    <div class="container mt-3" style="width: 800px;">
        <br> <br>
        <p class="mb-3"><b>Select Available Services</b></p>
        <div class="my-3 p-3 bg-body rounded border">
           
            <!-- <h6 class="border-bottom pb-2 mb-0"></h6> -->
            <div class="d-flex text-body-secondary pt-3">
                <img class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32"  src="Img/Fall Cleanup.png" role="img" aria-label="Placeholder: 32x32" alt="">
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">Fall Cleanup</strong>
                        <a href="selectedService.php">Select</a>
                    </div>
                    <span class="d-block">Paid upon completion</span>
                </div>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <!-- <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff"
                        dy=".3em">32x32</text>
                </svg> -->
                <img class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32"  src="Img/Fertilizer & Weed Control.jpg" role="img" aria-label="Placeholder: 32x32" alt="">

                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">Fertilizer & Weed Control</strong>
                        <a href="selectedService.php">Select</a>
                    </div>
                    <span class="d-block">Monthly Subscription</span>
                </div>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <!-- <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff"
                        dy=".3em">32x32</text>
                </svg> -->
                <img class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32"  src="Img/Lawn Mowing.png" role="img" aria-label="Placeholder: 32x32" alt="">

                <div class="pb-3 mb-0 small lh-sm w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">Lawn Mowing</strong>
                        <a href="selectedService.php">Select</a>
                    </div>
                    <span class="d-block">Paid per visit</span>
                </div>
            </div>
            <!-- <small class="d-block text-end mt-3">
                <a href="#">All suggestions</a>
            </small> -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>