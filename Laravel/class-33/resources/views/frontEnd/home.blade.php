@extends('frontEnd.master')

@section('content')
    <section class="courses">
        <div class="row c-mr-0">
            <div class="col-md-12 mt-5 text-center c-head-content">
                <h2>Courses we offer</h2>
                <p>Explore the intersection of technology and society. Learn about environmental justice. Take the famous Problem of God course. Our innovative courses inspire and invite you to help solve some of today’s most pressing local, national and global issues.</p>
            </div>
        </div>

        <div class="row c-mr-0">
            <div class="col-md-4">
                <div class="card course-content">
                    <h3 class="heading">Undergraduate Programs</h3>
                    <p class="text">For decades, Eduford College has improved the health of our communities, one graduate at a time. The JoAnn McGrath School of Nursing and Health Professions, as one of the largest nursing schools in Wisconsin, offers a wide array of fully accredited nursing programs, guaranteed clinical placements and a technology-rich Center for Clinical Education.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card course-content">
                    <h3 class="heading">Graduate Programs</h3>
                    <p class="text">Building on our strong roots in leadership, health care and education, Eduford is proud to offer an array of coed graduate programs for women and men who are ready to advance their careers and grow as leaders. The Eduford College Community Psychology Master's program will help you to meet your goals of becoming a Licensed Professional Counselor.program will help you</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card course-content">
                    <h3 class="heading">Post Graduation</h3>
                    <p class="text">The Eduford, as one of the largest nursing schools in Wisconsin, offers a wide array of fully accredited nursing programs, guaranteed clinical placements and a technology-rich Center for Clinical Education. The Eduford College Community Psychology Master's program will help you to meet your goals of becoming a Licensed Professional Counselor.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- class-12 -->
    <section class="campus mb-4">
        <div class="row c-mr-0">
            <div class="col-md-12 mt-5 text-center campus-content-text">
                <h2>Our Global Campus</h2>
                <p>The University of Hartford's main campus is located on Bloomfield Avenue. Surrounded by green space, the main campus is divided into residential and academic buildings connected by a bridge that overlooks the north branch of the Park River, known to us as Hog River.</p>
            </div>
        </div>
        <div class="row mt-5 c-mr-0">
            <div class="col-md-4">
                <div class="campus-content">
                    <img src="{{asset('/')}}front-assets/img/london.png" alt="">
                    <div class="layer"></div>
                    <div class="layer-content">
                        <h3>LONDON</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="campus-content">
                    <img src="{{asset('/')}}front-assets/img/newyork.png" alt="">
                    <div class="layer"></div>
                    <div class="layer-content">
                        <h3>NEW YORK</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="campus-content">
                    <img src="{{asset('/')}}front-assets/img/washington.png" alt="">
                    <div class="layer"></div>
                    <div class="layer-content">
                        <h3>WASHINGTON</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- class-13 -->
    <section class="facilities py-4">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="facilities-text">
                    <h1>Our Facilities </h1>
                    <p>We commit to meet the financial need of every admitted undergraduate student. We don’t consider your ability to pay when we review your application, and we don’t base our decision on whether you can cover the cost. If you’re accepted here, you belong here.</p>
                </div>
            </div>
        </div>
        <div class="row c-mr-0 mt-4 facility-content">
            <div class="col-md-4">
                <div class="card single-facility">
                    <img src="{{asset('/')}}front-assets/img/library.png" alt="">
                    <div class="card-body single-facility-content">
                        <h3>World Class Library</h3>
                        <p>Pursue research at Eduford’s libraries, which include more than 3.5 million holdings. Whether your focus is on a specific discipline, interdisciplinary areas or emerging fields, our libraries offer academic resources, a maker hub, collaborative spaces and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card single-facility">
                    <img src="{{asset('/')}}front-assets/img/basketball.png" alt="">
                    <div class="card-body single-facility-content">
                        <h3>World Class Library</h3>
                        <p>Pursue research at Eduford’s libraries, which include more than 3.5 million holdings. Whether your focus is on a specific discipline, interdisciplinary areas or emerging fields, our libraries offer academic resources, a maker hub, collaborative spaces and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card single-facility">
                    <img src="{{asset('/')}}front-assets/img/cafeteria.png" alt="">
                    <div class="card-body single-facility-content">
                        <h3>World Class Library</h3>
                        <p>Pursue research at Eduford’s libraries, which include more than 3.5 million holdings. Whether your focus is on a specific discipline, interdisciplinary areas or emerging fields, our libraries offer academic resources, a maker hub, collaborative spaces and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="testimonial-text">
                    <h1>What our student syas</h1>
                    <p>We commit to meet the financial need of every admitted undergraduate student. We don’t consider your ability to pay when we review your application, and we don’t base our decision on whether you can cover the cost. If you’re accepted here, you belong here.</p>
                </div>
            </div>
        </div>

        <div class="row c-mr-0 mt-5 mb-5">
            <div class="col-md-6">
                <div class="row testimonial-content">
                    <div class="col-md-2 col-2">
                        <img class="img-fluid" src="{{asset('/')}}front-assets/img/user1.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-10">
                        <div>
                            <p>“Eduford is home to me not because of the fancy buildings like Healy Hall, or its prestigious reputation, but rather because of the university’s care for the whole person as each of us attempts to live our lives for others.” </p>
                            <h5>Anamika Saha</h5>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row testimonial-content">
                    <div class="col-md-2 col-2">
                        <img class="img-fluid" src="{{asset('/')}}front-assets/img/user2.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-10">
                        <div>
                            <p  class="pb-6">“It’s likely that you will come to love some of the most amazing souls this campus has to offer. That love may come in the form of friendships that you know will last forever.” </p>
                            <h5>Abhishek Roy</h5>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="cta-content">
                    <h1>Enroll For Our Various Online Courses </h1>
                    <h1 class="mt-5 mb-5">Anywhere from the World</h1>
                    <p class="text-center">
                        <a href="" class="btn btn-outline-primary hero-btn">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
