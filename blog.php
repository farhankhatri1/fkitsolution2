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

        <div class="container-fluid">
            <div class="container wrapper">
                <div class="row contact-a" data-aos="fade-right">
                    <h3>Let’s Talk About Your Next Project</h3>
                    <a href="#contact" class="btn-primary">Contact us</a>
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