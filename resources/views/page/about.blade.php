@include("layout.header");
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            color: #007BFF;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
        <nav>
            <ul>
                <li><a href="#mission">Our Mission</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="mission">
            <h2>Our Mission</h2>
            <p>We aim to provide the best service possible, focusing on quality and customer satisfaction.</p>
        </section>

        <section id="team">
            <h2>Our Team</h2>
            <p>Our team is composed of experienced professionals dedicated to making your experience exceptional.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to <a href="mailto:info@example.com">email us</a>.</p>
        </section>
    </main>
    @include("layout.footer")

</body>
</html>
