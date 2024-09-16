<?php $currentPage = '' ?>
<?php include("_header.php") ?>
<title>Scott's Mobile Small Engine Repair</title>


<div class="px-4  my-5 text-center">
    <h1 class="display-5 fw-bold text-white">We Fix Gas & Electric Equipment</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 mt-3">Scott's Mobile Small Engine Repair has been in business now for 4 years & we
            are

            always looking to provide the best professional friendly genuine service to our customers & clients.
            Customer/Client Satisfaction is our #1 Priority, always providing you with a great experience.
            Always
            going above & beyond expectations!</p> <br> <br>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal3">
                Check your price
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <section class="text-gray-600 body-font relative flex justify-center items-center h-screen">
                                <div class="absolute inset-0 bg-gray-300">
                                    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0"
                                        title="map" scrolling="no"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43069407.12990529!2d-135.77916323433257!3d48.786701167657135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1696872092459!5m2!1sen!2sin"
                                        style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                                </div>

                                <form action="selectService.php" method="POST">
                                    <div
                                        class="lg:w-8/9 md:w-8/9 bg-white rounded-lg p-4 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                                        <div class="relative  flex items-center">
                                            <p class="mr-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                    fill="currentColor" class="bi bi-crosshair" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5.5a.5.5 0 0 0-1 0v.518A7.001 7.001 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7.001 7.001 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7.001 7.001 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7.001 7.001 0 0 0 8.5 1.018V.5Zm-6.48 7A6.001 6.001 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6.001 6.001 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6.002 6.002 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6.001 6.001 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1h-.48ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                </svg></p>
                                            <!-- <input type="text" id="name" name="name"
                                                        placeholder="Search for an address..."
                                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                                        required> -->
                                            <select id="locationSelect" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Select your location</option>
                                                <option value="Pune">Calgary</option>
                                                <option value="Satara">British Columbia</option>
                                                <option value="Mumbai">Hamilton</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br> <br> <br> <br>
    </div>
</div>
</div>
<div class="subBanner-class container">
    <div class="container px-4 " id="hanging-icons">
        <center>
            <h2 class="pb-2 border-bottom "><b>OUR SERVICES</b></h2>
        </center>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mt-3">
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="Img/Services/Lawn Mowers.png" width="45px" height="45px" alt="">


                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Lawn Mowers</h3>
                    <p>Revitalize your lawn with our top-notch lawn mowers, engineered for precision and efficiency.
                        Experience the perfect cut and a pristine yard with our premium mowing solutions.</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        Know More
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="Img/Services/Lawn Tractors.png" width="45px" height="45px" alt="">
                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Lawn Tractors</h3>
                    <p>Elevate your lawn care with our powerful lawn tractors, designed for superior performance and
                        ease of use. Tackle large yards and complex terrain effortlessly with our premium range of
                        lawn tractors.</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        Know More
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="Img/Services/Pressure Washers.jpg" width="55px" height="55px" alt="">

                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Pressure Washers</h3>
                    <p>Rediscover the beauty of your home and surroundings with our high-performance pressure
                        washers. Effortlessly blast away dirt, grime, and stains to reveal a spotless and refreshed
                        environment.</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        Know More
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mt-3">
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="Img/Services/Snowblowers.webp" width="55px" height="55px" alt="">


                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Snowblowers</h3>
                    <p>Conquer winter's challenges with our reliable snowblowers. Effortlessly clear driveways and
                        walkways, ensuring safe and hassle-free winters for your home or business.</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        Know More
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="Img/Services/Snow Sweepers.png" width="55px" height="55px" alt="">
                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Snow Sweepers</h3>
                    <p>Keep your pathways & parking areas snow-free with our efficient snow sweepers. Designed for
                        fast & thorough snow removal, our sweepers ensure safety & convenience during winter.
                    </p>
                    <a href="#" class="btn btn-primary btn-sm">
                        Know More
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="Img/Services/Edgers.png" width="45px" height="45px" alt="">

                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Edgers</h3>
                    <p>Define the borders of your lawn with precision using our expertly crafted edgers. Create
                        clean, manicured edges for a polished and professional look in your landscaping.</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        Know More
                    </a>
                </div>
            </div>
        </div>
        <br>
        <!-- <center><a href="#" class="btn btn-secondary">More Services</a></center> -->
        <br>
        <br>
    </div>
</div>

<?php include("_footer.php") ?>