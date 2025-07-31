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
  <section id="Testimonials">

    <div class="container-fluid">
      <div class="container wrapper">
        <div class="row" data-aos="fade-left">
          <h3 class="abc text-center">What Our <span> Clients Say</span></h3>
          <p class="text-center ">Don't just take our word for it. Here's what our clients have to say about our
            services.</p>
          <div class="row test">
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