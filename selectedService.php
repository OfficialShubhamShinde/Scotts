<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Selected Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Scott logo.png" rel="icon">
</head>
<style>
    a {
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

    <div class="container mt-3">
        <br>
        <div class="row">
            <!-- Left side list group (Column 1) -->

            <div class="col-md-6">
                <b class="mb-5">Selected Service</b>
                <br>
                <div class="list-group mt-3">
                    <div class="list-group">
                        <label class="list-group-item d-flex gap-2">
                            <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="62" height="62"
                                src="Img/Fall Cleanup.png" role="img" aria-label="Placeholder: 32x32" alt="">
                            <span>
                                Fall Cleanup
                                <small class="d-block text-body-secondary">Paid upon completion</small>

                            </span>
                        </label>
                        <label class="list-group-item d-flex gap-2">
                            <table class="table table-borderless" style="width: 450px;">

                                <tbody>
                                    <tr>
                                        <th scope="row">Subtotal</th>

                                        <td class="text-end">$233</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Taxes</th>

                                        <td class="text-end">$11.65</td>
                                    </tr>
                                </tbody>
                            </table>
                        </label>
                        <label class="list-group-item d-flex gap-2">
                            <table class="table table-borderless" style="width: 450px;">
                                <tbody>
                                    <tr>
                                        <th scope="row">Total</th>

                                        <td class="text-end"><b>$244.65</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Right side list group (Column 2) -->
            <div class="col-md-6">
                <form action="serviceOverview.php" method="POST">
                    <div class="list-group">
                        <p class="mb-3"><b>Services Setup</b></p>
                        <div class="list-group" style="width: 550px;">
                            <!-- <h6 class="mt-5">Select a Service</h6> -->
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                                    id="listGroupRadios1" value="" checked="">
                                <span>
                                    Infill or 1/2 duplex (approx. 25' x 50')
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                                    id="listGroupRadios2" value="">
                                <span>
                                    Suburban (approx. 35' x 50')
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                                    id="listGroupRadios3" value="">
                                <span>
                                    Inner City (approx. 50' x 100')
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2" width="200px">
                                <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                                    id="listGroupRadios3" value="">
                                <span>
                                    Large or pie-shaped (over 50' x 100')
                                </span>
                            </label>

                            <b class="mt-4 mb-2">Property Features</b>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Corner lot
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Steep or difficult
                                </label>
                            </div>
                            <b class="mt-4 mb-2">Add ons</b>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Core aeration
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Fertilizer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Bag removal
                                </label>
                            </div>
                            <hr>
                            <b class="mt-3">Order Comments</b>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Add a note for our team
                                    (optional)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- serviceOverview.php -->
                        <button type="submit" class="btn btn-primary">continue</button>
                        <br><br>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>