<!DOCTYPE html>
<html>
<head>
    <title>Contact - Falcon Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- HEADER -->
<header class="header">
    <h1>Falcon Hotel</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="menu.html">Menu</a>
        <a href="gallery.html">Gallery</a>
        <a href="order.php">Order</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<!-- CONTACT SECTION -->
<section>
    <h2>Contact Us</h2>

    <form action="savecontact.php" method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="text" name="phone" placeholder="Phone">

        <input type="text" name="location" placeholder="Location">

        <textarea name="message" placeholder="Your Message" rows="5"></textarea>

        <button type="submit">Send Message</button>

    </form>
</section>

<!-- FOOTER -->
<footer class="footer">
    <p>© 2026 Falcon Hotel</p>
</footer>

</body>
</html>