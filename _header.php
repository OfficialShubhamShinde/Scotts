<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Scott's Mobile Small Engine Repair</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Scott logo.png" rel="icon">
</head>


<body>
    <div class="banner-section" style="background-color: rgb(14,22,41); color: white;">
        <div class="container">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="Scott logo.png" width="60px" height="60px" alt="">
                    </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary text-white"><b>Home</b></a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
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
                            <li><a class="dropdown-item" href="Services/lawn_mowers.php">Lawn Mowers</a></li>
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
                    <!-- <button type="button" class="btn btn-outline-primary me-2 text-white">Sign-in</button> -->
                    <button type="button" class="btn btn-outline-primary me-2 text-white" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">Sign-in</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Sign in</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="text-dark"
                                                style="text-align: start; display: block;">Username</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="text-dark"
                                                style="text-align: start; display: block;">Password</label>
                                            <input type="password" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <button type="button" class="btn btn-primary text-white">Sign-up</button> -->
                    <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Sign-in</button>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Sign Up</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="text-dark"
                                                style="text-align: start; display: block;">Full Name</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="text-dark"
                                                style="text-align: start; display: block;">Email Id</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="text-dark"
                                                style="text-align: start; display: block;">Contact Number</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="text-dark"
                                                style="text-align: start; display: block;">Password</label>
                                            <input type="password" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>