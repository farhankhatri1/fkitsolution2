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