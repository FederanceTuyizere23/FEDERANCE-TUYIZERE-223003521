<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

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

<!-- THIS IS THE FIX -->
<section>
    <h2>Order Now</h2>

    <form action="saveorder.php" method="POST">

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Phone">

        <select name="menu">
            <option>Fish</option>
            <option>Drink</option>
            <option>Juice</option>
        </select>

        <input type="text" name="address" placeholder="Address">
        <input type="date" name="date">

        <button type="submit">Submit Order</button>

    </form>
</section>

<footer class="footer">© 2026 Falcon Hotel</footer>

</body>
</html>