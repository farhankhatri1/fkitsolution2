<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>3D Vision Hero</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="res.css">
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

</head>

<body>
 <?php require("include/header.php") ?>
  <section id="About us">
    <div class="container-fluid">
      <div class="container">
        <div class="row about" data-aos="fade-right">
          <h3 class="abc text-center mb-5">About <span>us</span></h3>
          <div class="col-lg-6 aba">
            <h2>Your Partner in Achieving Digital Excellence</h2>
            <p>We craft customized strategies that help your brand grow, engage, and succeed in the ever-evolving
              digital world.</p>
            <img src="images/Mask-group.png" alt="" class="w-100 mb-4">
            <a href="aboutus.php" class="btn-primary">More About Us</a>
          </div>
          <div class="col-lg-6 aba">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Our Mission
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Delivering Excellence with Every Project<br></strong> Our mission is to provide exceptional,
                    results-driven services that exceed client expectations. By combining creativity with technical
                    expertise, we aim to deliver high-quality, impactful solutions that help our clients grow their
                    businesses and build lasting connections with their audience.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Our Vision
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Empowering Brands to Thrive in a Digital World</strong>Our vision is to be a leading
                    creative agency that empowers brands by delivering innovative digital solutions. We aim to help
                    businesses expand their online presence, connect with their target audience, and achieve sustainable
                    growth in a constantly evolving digital landscape.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Core Values
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Creativity, Integrity, and Collaboration</strong> At 3D Vision, we believe in the power of
                    creativity, integrity, and collaboration. These core values guide everything we do, from the way we
                    engage with clients to how we approach each project. We are committed to delivering solutions that
                    are not only innovative but also align with the values and goals of your business.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="container  wrapper">
        <div class="row text-center" data-aos="fade-left">
          <h3 class="abc">Our <span>Services</span></h3>
          <p>We offer a comprehensive range of services to meet your business needs.</p>
          <div class="row row3">
            <!-- web development services -->

            <div class="card" data-aos="flip-up"
              style="width:26rem;    margin: 15px 0;  background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="iconsvg">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-laptop text-white">
                  <path
                    d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16">
                  </path>
                </svg>

              </div>

              <div class="card-body">
                <h5 class="card-title">Website Development</h5>
                <p class="card-text">We build robust, scalable, and dynamic websites tailored to your business needs.
                  Our expertise ranges from stunning frontend designs to powerful backend solutions, ensuring your
                  digital presence stands out.</p>
                <a href="webdevelopmentservicespage.php">Read more</a>
              </div>

            </div>
            <!-- Digital Marketing services -->
            <div class="card" data-aos="flip-left"
              style="width:26rem;margin:15px 13px;  background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="iconsvg">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="text-4xl"
                  height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z">
                  </path>
                </svg>

              </div>

              <div class="card-body">
                <h5 class="card-title">Digital Marketing</h5>
                <p class="card-text">Boost your online presence with our comprehensive digital marketing services. From
                  SEO to social media marketing, we help you grow your business by reaching the right audience
                  effectively.</p>
                <a href="digitalmarketing.php">Read more <svg class="ml-1 w-5 h-5" fill="currentColor"
                    style="width: 7%;" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
                  </svg></a>
              </div>

            </div>
            <!--Graphics Design services -->
            <div class="card" data-aos="flip-right"
              style="width:26rem;     margin: 15px 0; float: left;    background: rgba(30, 41, 59, 0.8); color: #fff">

              <div class="iconsvg">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-monitor-smartphone text-white">
                  <path d="M18 8V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h8"></path>
                  <path d="M10 19v-3.96 3.15"></path>
                  <path d="M7 19h5"></path>
                  <rect width="6" height="10" x="16" y="12" rx="2"></rect>
                </svg>

              </div>

              <div class="card-body">
                <h5 class="card-title">Graphics Design</h5>
                <p class="card-text">Our expert graphic designers create visually compelling designs that resonate with
                  your target audience. From logos to full brand identity packages, we bring your vision to life with
                  creativity and precision.</p>
                <a href="graphicdesign.php">Read more</a>
              </div>

            </div>

            <!--Apps Development -->
            <div class="card" data-aos="flip-up" style="width:26rem;  background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="iconsvg">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="text-4xl"
                  height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                  </path>
                </svg>

              </div>

              <div class="card-body">
                <h5 class="card-title">Apps Development</h5>
                <p class="card-text">We create feature-rich, user-friendly mobile applications for both Android and iOS
                  platforms. From concept to deployment, we provide end-to-end app development services that drive user
                  engagement and business growth.</p>
                <a href="appdevelopment.php">Read more <svg class="ml-1 w-5 h-5" fill="currentColor" style="width: 7%;"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
                  </svg></a>
              </div>

            </div>
            <!--Search Engine Optimization (SEO) -->
            <div class="card" data-aos="flip-right"
              style="width:26rem;margin: 0 13px;  background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="iconsvg">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-circle-alert hover:animate-bounce duration-500 transition-all ease-in-out">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="12" x2="12" y1="8" y2="12"></line>
                  <line x1="12" x2="12.01" y1="16" y2="16"></line>
                </svg>
                </path>
                </svg>

              </div>

              <div class="card-body">
                <h5 class="card-title">Search Engine Optimization (SEO)</h5>
                <p class="card-text">Boost your online visibility and drive organic traffic with our expert SEO
                  strategies that deliver results.
                </p>
                <a href="seo.php">Read more <svg class="ml-1 w-5 h-5" fill="currentColor" style="width: 7%;"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
                  </svg></a>
              </div>

            </div>
            <!--Link Building -->
            <div class="card" data-aos="flip-left"
              style="width:26rem; float: left;    background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="iconsvg">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-circle-alert hover:animate-bounce duration-500 transition-all ease-in-out">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="12" x2="12" y1="8" y2="12"></line>
                  <line x1="12" x2="12.01" y1="16" y2="16"></line>
                </svg>

              </div>

              <div class="card-body">
                <h5 class="card-title">Link Building </h5>
                <p class="card-text">Grow your brand’s presence and connect with your audience through strategic,
                  high-impact social media management.</p>
                <a href="linkbuliding.php">Read more <svg class="ml-1 w-5 h-5" fill="currentColor" style="width: 7%;"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container-fluid">
      <div class="container wrapper">
        <div class="row row4" data-aos="fade-down">
          <h3 class="abc text-center mt-2">Our <span>portfolio</span></h3>
          <ul class="nav nav-tabs portfolio" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ALL</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Graphic Design</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"> Web
                Development</button>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
              tabindex="0">
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd 1.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin: 0 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd2.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd3.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin: 12px 0;   background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd4.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   margin:12px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd5.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin: 12px 0;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd6.jpg" alt="wd 1" class="w-100"></a>

              </div>

              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd2.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   margin:0px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd3.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd8.jpg" alt="wd 1" class="w-100"></a>

              </div>
            </div>
            <!-- graphic -->
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd2.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   margin:0px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd12.jpg" alt="wd 1" class="w-100"></a>

              </div>

              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;      background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd3.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   margin:12px 0;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd10.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   margin:12px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd11.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;    margin:12px 0;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd4.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd1.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   margin:0 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd8.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/gd9.jpg" alt="wd 1" class="w-100"></a>

              </div>
            </div>
            <!-- web -->
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd 1.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin: 0 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd2.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;   background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd3.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin:12px 0 ;     background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd4.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin: 12px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd5.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;  margin:12px 0 ;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd6.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left;  margin:12px 0 ;  background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd7.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin:12px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd8.jpg" alt="wd 1" class="w-100"></a>

              </div>
              <div class="card" data-aos="flip-up"
                style="width:26rem; float: left; margin:12px 0 ;   background: rgba(30, 41, 59, 0.8); color: #fff;">
                <a href="#"> <img src="images/wd9.jpg" alt="wd 1" class="w-100"></a>

              </div>
            </div>

          </div>
        </div>
      </div>
  </section>
  <section id="Testimonials">

    <div class="container-fluid">
      <div class="container wrapper">
        <div class="row dda" data-aos="fade-left">
          <h3 class="abc text-center">What Our <span> Clients Say</span></h3>
          <p class="text-center ">Don't just take our word for it. Here's what our clients have to say about our
            services.</p>
          <div class="row dda-1 ">
            <!-- 1 -->
            <div class="card"
              style="width:26rem; float: left;margin: 20px 0;    background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="card-body">
                <div class="img"><img src="images/Ellipse-4.png" alt="Ellipse-4">
                </div>
                <h5 class="card-title">Wade Warren </h5>
                <ul class="star">
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Sagittis pellentesque arcu ultrices egestas
                  nulla turpis ac amet in. Morbi orci odio nam ultrices facilisis vestibulum.</p>


                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
                </svg></a>
              </div>
            </div>
            <!-- 2 -->
            <div class="card"
              style="width:26rem; float: left;margin: 20px 13px;    background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="card-body">
                <div class="img"><img src="images/Ellipse-4.png" alt="Ellipse-4">
                </div>
                <h5 class="card-title">Wade Warren </h5>
                <ul class="star">
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Sagittis pellentesque arcu ultrices egestas
                  nulla turpis ac amet in. Morbi orci odio nam ultrices facilisis vestibulum.</p>


                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
                </svg></a>
              </div>
            </div>
            <!-- 3 -->
            <div class="card"
              style="width:26rem; float: left;margin: 20px 0;    background: rgba(30, 41, 59, 0.8); color: #fff;">
              <div class="card-body">
                <div class="img"><img src="images/Ellipse-4.png" alt="Ellipse-4">
                </div>
                <h5 class="card-title">Wade Warren </h5>
                <ul class="star">
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Sagittis pellentesque arcu ultrices egestas
                  nulla turpis ac amet in. Morbi orci odio nam ultrices facilisis vestibulum.</p>


                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
                </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section>
  <div class="container-fluid">
    <div class="container wrapper">
      <div class="row blog" data-aos="fade-right">
        <h3 class="abc text-center">Read <span>Our Blog </span></h3>

    <?php
// Static array of blog posts
$blog_posts = [
  [
    "id" => 1,
    "title" => "The Future of Mobile Apps Development",
    "content" => "A comprehensive look at the trends shaping the future of mobile app development.",
    "image" => "65f840d316353_mobile.webp",
    "created_at" => "2025-07-31",
    "posted_by" => "Admin"
  ],
  [
    "id" => 2,
    "title" => "Why Your Business Needs a Mobile App",
    "content" => "Learn why every business, big or small, should invest in mobile app development.",
    "image" => "App-development-process-Feature-image.webp",
    "created_at" => "2025-07-31",
    "posted_by" => "Admin"
  ],
  [
    "id" => 3,
    "title" => "How AI is Revolutionizing Mobile App Development",
    "content" => "Artificial intelligence is changing the game for mobile apps. Here’s how.",
    "image" => "mobile-app-development.webp",
    "created_at" => "2025-07-31",
    "posted_by" => "Admin"
  ]
];

// Loop through static posts
foreach ($blog_posts as $row) {
?>
  <div class="card" style="width:26rem; float: left; margin: 20px 5px; background: rgba(30, 41, 59, 0.8); color: #fff;">
    <div class="card-body">
      <img src="images/<?php echo $row['image']; ?>" class="card-img-top w-100" alt="<?php echo $row['title']; ?>">
      <h5 class="card-title"><?php echo $row['title']; ?></h5>
      <p class="card-text"><?php echo substr($row['content'], 0, 100); ?>...</p>
      <small>
        Post created on : <?php echo date('d M Y', strtotime($row['created_at'])); ?> | 
        by : <?php echo $row['posted_by']; ?>
      </small><br>
      <a href="blogsinglepage.php?id=<?php echo $row['id']; ?>" style="color: #7b61ff; text-decoration: underline;">Read more</a>
    </div>
  </div>
<?php } ?>
      </div>
    </div>
  </div>
</section>
<section>
        <div class="container-fluid">
            <div class="container wrapper">
                <div class="row contact-a" data-aos="fade-right">
                    <h3>Let’s Talk About Your Next Project</h3>
                    <a href="contact us.php" class="btn-primary">Contact us</a>
                </div>
            </div>
        </div>
    </section>
  <?php require("include/footer.php") ?>
  <div class="custom-cursor"></div>
  <div class="custom-dot"></div>
  <script>
    //mouse cursor
    const cursor = document.querySelector('.custom-cursor');
    const dot = document.querySelector('.custom-dot');

    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;

    window.addEventListener('mousemove', e => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      dot.style.left = mouseX + 'px';
      dot.style.top = mouseY + 'px';
    });

    function animate() {
      cursorX += (mouseX - cursorX) * 0.1;
      cursorY += (mouseY - cursorY) * 0.1;

      cursor.style.left = cursorX + 'px';
      cursor.style.top = cursorY + 'px';

      requestAnimationFrame(animate);
    }

    animate();


    //floting circle
    const container = document.querySelector('.floating-container');

    for (let i = 0; i < 25; i++) {
      const circle = document.createElement('div');
      circle.classList.add('floating-circle');

      // Random horizontal start position
      circle.style.left = `${Math.random() * 100}%`;

      // Random size
      const size = 10 + Math.random() * 20;
      circle.style.width = `${size}px`;
      circle.style.height = `${size}px`;

      // Random color glow
      const colors = ['#7b61ff', '#a05eff', '#4e4cff'];
      const color = colors[Math.floor(Math.random() * colors.length)];
      circle.style.backgroundColor = color;
      circle.style.boxShadow = `0 0 20px ${color}`;

      // Random animation delay and duration
      circle.style.animationDelay = `${Math.random() * 8}s`;
      circle.style.animationDuration = `${6 + Math.random() * 4}s`;

      container.appendChild(circle);
    }

  </script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,   // animation speed
      once: false      // repeat every scroll
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>