<?php
$blog_posts = [
  [
    "id" => 1,
    "title" => "The Future of Mobile Apps Development",
    "content" => "Mobile apps have transformed industries. This post explores the key trends and technologies that will drive the future of mobile apps, including AI, machine learning, and cross-platform development.",
    "image" => "65f840d316353_mobile.webp",
    "created_at" => "2025-07-31",
    "created_by" => "Admin"
  ],
  [
    "id" => 2,
    "title" => "Why Your Business Needs a Mobile App",
    "content" => "In this post, we explore the top reasons businesses need mobile apps, from customer engagement to improving sales and offering personalized experiences.",
    "image" => "App-development-process-Feature-image.webp",
    "created_at" => "2025-07-31",
    "created_by" => "Admin"
  ],
  [
    "id" => 3,
    "title" => "How AI is Revolutionizing Mobile App Development",
    "content" => "We review the top mobile app development frameworks of 2024, including React Native, Flutter, Xamarin, Swift, and Kotlin. Learn which framework is best suited for your app project.",
    "image" => "mobile-app-development.webp",
    "created_at" => "2025-07-31",
    "created_by" => "Admin"
  ]
];

// Get ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$post = null;

// Find the post
foreach ($blog_posts as $b) {
  if ($b['id'] === $id) {
    $post = $b;
    break;
  }
}
?>

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
        <div class="row bg" data-aos="fade-right">
          <h3 class=" abc text-center">Single page<span>Blog </span></h3>
          <div class="dd" style="max-width: 800px; margin: 50px auto; padding: 20px; background-color: #1e293b; border-radius: 8px;">
  <?php if ($post !== null): ?>
    <h1><?php echo $post['title']; ?></h1>
   <p><small>Post created: <?php echo date('d M Y', strtotime($post['created_at'])); ?> | by <?php echo $post['created_by']; ?></small></p>
    <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" style="width:100%; border-radius: 8px;">
    <p style="margin-top: 20px;"><?php echo $post['content']; ?></p>
    <!-- Back to Blog Button -->
      <div class="text-center mt-4">
        <a href="blog.php" class="btn btn-outline-light">← Back to Blog</a>
      </div>
    <?php else: ?>
    <h2>Post not found</h2>
  <?php endif; ?>
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


