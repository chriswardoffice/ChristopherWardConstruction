<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Christopher Ward Construction</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="spacer"></div>
  <div class="container">
    <h1>Christopher Ward Construction</h1>
    <div class="about">
      <p>High-end Building and Construction Company specialising in everything from Ground Works, re-furbishments, kitchen and bathroom renovations. Available for specialist Welding as well including TIG, MIG atc. Also available as a Towing and Haulage service in and around the United Kingdom</p>
    </div>
    <nav>
      <a href="index.php"><span>Home</span></a> <!-- Updated -->
      <a href="gallery.php"><span>Gallery</span></a> <!-- Changed from Services -->
      <a href="#" id="contact-link"><span>Contact</span></a>
    </nav>
    <!-- Popup form -->
    <div class="contact-popup" id="contact-popup">
      <button class="close-btn" id="close-popup">X</button>
      <form action="send_mail.php" method="POST" class="contact-form" id="contact-form">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Send Transmission</button>
      </form>
    </div>
  </div>
  <div class="spacer"></div>
  <script src="script.js"></script>
</body>

</html>