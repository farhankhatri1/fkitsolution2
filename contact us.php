<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  <section id="contact">
    <div class="container-fluid">
      <div class="container wrapper" data-aos="fade-up">
        <div class="row gg">
          <h3 class="abc text-center">Get <span>In Touch</span></h3>
          <p class="text-center" style="font-size: 1.8rem;">Ready to bring your ideas Contact us today to
            discuss your project.</p>
        </div>
        <div class="row row-c">
          <div class="col-lg-6 row-c-1">
            <h4 class="text-white fw-bold fs-2 mt-4">Contact Information</h4>
            <p class="fs-6">Fill out the form and our team will get back to you within 24 hours.</p>
            <ul class="p-0">
              <li><i class="fa-solid fa-phone"></i> +923147700190</li>
              <li><i class="fa-solid fa-envelope"></i> nfo@3dvision.com</li>
              <li><i class="fa-solid fa-location-dot"></i> 28 Grantham Place, Bd7 1rj,</li>
            </ul>

          </div>
          <div class="col-lg-6 row-c-2">


            <form action="contact us.php" method="POST">
              <input type="text" name="first_name" placeholder="First Name" required>
              <input type="text" name="last_name" placeholder="Last Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <select name="service" required>
                <option value="">Select a service</option>
                <option value="Website Development">Website Development</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="Graphics Design">Graphics Design</option>
                <option value="Apps Development">Apps Development</option>
                <option value="SEO">SEO</option>
                <option value="Social Media">Social Media</option>
              </select>
              <textarea name="message" placeholder="Your Message" required></textarea>
              <button class="btn-primary ff" type="submit" style="    padding: 4px 36px; margin: 10px 0;"
                name="submit">submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tt" style="margin-top:30px;">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28827.086449984152!2d68.36971184999999!3d25.42536205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1753777208216!5m2!1sen!2s"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

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
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['first_name'];
    $lastName  = $_POST['last_name'];
    $email     = $_POST['email'];
    $service   = $_POST['service'];
    $message   = $_POST['message'];

    // Save to database
    $conn = new mysqli("localhost", "root", "", "contact_db");
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // 🔐 Check for duplicate email
    $check = $conn->prepare("SELECT * FROM contact_messages WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('You have already submitted this form with this email!'); window.location.href='contact us.php';</script>";
        exit();
    }

    // ✅ Insert if email is not duplicate
    $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, service, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $service, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // ✅ Send Email
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'farhamrizwan72@gmail.com';
        $mail->Password   = 'pgti bypa vnwo kfiy';  // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($email, "$firstName $lastName");
        $mail->addAddress('farhamrizwan72@gmail.com', 'Website Admin');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <strong>Name:</strong> $firstName $lastName<br>
            <strong>Email:</strong> $email<br>
            <strong>Service:</strong> $service<br>
            <strong>Message:</strong><br>$message
        ";

        $mail->send();
        echo "<script>alert('Your form has been successfully sent!'); window.location.href='contact us.php';</script>";
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>


