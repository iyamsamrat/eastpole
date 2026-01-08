<!-- Spinner -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary"></div>
</div>

<!-- Hero -->
<div class="container-fluid py-5 hero-header wow fadeIn">
    <div class="container py-5">
        <h1 class="text-primary">We Care Your Baby</h1>
        <h1 class="display-1 text-white">The Best Play Area For Your Kids</h1>
        <a href="<?= url('contact') ?>" class="btn btn-primary px-4 py-3">Get Started</a>
        <a href="<?= url('about') ?>" class="btn btn-primary px-4 py-3">Learn More</a>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid py-5 about bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="video border">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                <h4
                    class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                    About Us
                </h4>
                <h1 class="text-dark mb-4 display-5">We Learn Smart Way To Build Bright Futute For Your Children</h1>
                <p class="text-dark mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. the printing and
                    typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Sport Activites</h6>
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Outdoor Games</h6>
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Nutritious Foods</h6>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Highly Secured</h6>
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Friendly Environment</h6>
                        <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Qualified Teacher</h6>
                    </div>
                </div>
                <a href="<?= url('about') ?>" class="btn btn-primary px-5 py-3 btn-border-radius">More Details</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                What We Do</h4>
            <h1 class="mb-5 display-3">Thanks To Get Started With Our School</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border-primary border bg-white service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-inner">
                            <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                            <a href="#" class="h4">Study & Game</a>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                officiis animi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="<?= url('service') ?>"
                                class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border-primary border bg-white service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-inner">
                            <div class="p-4"><i class="fas fa-sort-alpha-down fa-6x text-primary"></i></div>
                            <a href="#" class="h4">A to Z Programs</a>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                officiis animi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="<?= url('program') ?>"
                                class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border-primary border bg-white service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-inner">
                            <div class="p-4"><i class="fas fa-users fa-6x text-primary"></i></div>
                            <a href="#" class="h4">Expert Teacher</a>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                officiis animi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="<?= url('team') ?>"
                                class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border-primary border bg-white service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-inner">
                            <div class="p-4"><i class="fas fa-user-nurse fa-6x text-primary"></i></div>
                            <a href="#" class="h4">Mental Health</a>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui
                                officiis animi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="<?= url('contact') ?>"
                                class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->

<!-- Programs Start -->
<div class="container-fluid program py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                Our Programs</h4>
            <h1 class="mb-5 display-3">We Offer An Exclusive Program For Kids</h1>
        </div>

        <div class="row g-5 justify-content-center">
            <?php
            $programs = [
                ['img' => 'program-1.jpg', 'title' => 'English For Today'],
                ['img' => 'program-2.jpg', 'title' => 'Graphics Arts'],
                ['img' => 'program-3.jpg', 'title' => 'General Science'],
            ];
            foreach ($programs as $i => $p):
                $delay = 0.1 + ($i * 0.2);
                ?>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="<?= number_format($delay, 1) ?>s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="<?= asset('img/' . $p['img']) ?>" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4"><?= htmlspecialchars($p['title']) ?></a>
                                <p class="mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed
                                    purus consectetur,</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="<?= asset('img/program-teacher.jpg') ?>"
                                class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Image"
                                style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                <small>Arts Designer</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                <a href="<?= url('program') ?>" class="btn btn-primary px-5 py-3 text-white btn-border-radius">Vew All
                    Programs</a>
            </div>
        </div>
    </div>
</div>
<!-- Program End -->

<!-- Events Start -->
<div class="container-fluid events py-5 bg-light">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                Our Events</h4>
            <h1 class="mb-5 display-3">Our Upcoming Events</h1>
        </div>

        <div class="row g-5 justify-content-center">
            <?php
            $events = [
                ['img' => 'event-1.jpg', 'title' => 'Music & drawing workshop'],
                ['img' => 'event-2.jpg', 'title' => 'Why need study'],
                ['img' => 'event-3.jpg', 'title' => 'Child health consciousness'],
            ];
            foreach ($events as $i => $e):
                $delay = 0.1 + ($i * 0.2);
                $img = asset('img/' . $e['img']);
                ?>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="<?= number_format($delay, 1) ?>s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="<?= $img ?>" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="<?= $img ?>" data-lightbox="event-<?= $i + 1 ?>"><i
                                            class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am -
                                    12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New
                                    York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4"><?= htmlspecialchars($e['title']) ?></a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus
                                consectetur,</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!-- Events End-->

<!-- Blog Start-->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                Latest News & Blog</h4>
            <h1 class="mb-5 display-3">Read Our Latest News & Blog</h1>
        </div>

        <div class="row g-5 justify-content-center">
            <?php
            $blogs = ['blog-1.jpg', 'blog-2.jpg', 'blog-3.jpg'];
            foreach ($blogs as $i => $b):
                $delay = 0.1 + ($i * 0.2);
                ?>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="<?= number_format($delay, 1) ?>s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="<?= asset('img/' . $b) ?>" class="img-fluid w-100" alt="Image">
                        </div>
                        <div
                            class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="<?= asset('img/program-teacher.jpg') ?>"
                                    class="img-fluid rounded-circle p-2 rounded-top" alt="Image"
                                    style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Hello Kidz</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="<?= url('blog') ?>" class="h4">How to make time for your kids?</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed
                                    purus</p>
                            </div>
                            <div class="text-center">
                                <a href="<?= url('blog') ?>"
                                    class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!-- Blog End-->

<!-- Team Start-->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                Our Team</h4>
            <h1 class="mb-5 display-3">Meet With Our Expert Teacher</h1>
        </div>

        <div class="row g-5 justify-content-center">
            <?php
            $team = ['team-1.jpg', 'team-2.jpg', 'team-3.jpg', 'team-4.jpg'];
            foreach ($team as $i => $t):
                $delay = 0.1 + ($i * 0.2);
                ?>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="<?= number_format($delay, 1) ?>s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="<?= asset('img/' . $t) ?>" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href="#"><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Linda Carlson</h4>
                            <p class="text-muted mb-2">English Teacher</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!-- Team End-->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                Our Testimonials</h4>
            <h1 class="mb-5 display-3">Parents Say About Us</h1>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                            style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="<?= asset('img/testimonial-2.jpg') ?>" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">
                                Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard
                                dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>
</div>
<!-- Testimonial End -->