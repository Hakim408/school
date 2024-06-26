<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/about.css">
    <link
        rel="stylesheet"
        href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.html"><h4>School</h4></a>
            <ul class="nav_menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="chat.html">Chat With Us</a></li>
                <li><a href="admin/login.php">Log In</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>


    <section class="about_achievements">
        <div class="container about_achievements-container">
            <div class="about_achievements-left">
                <img src="#">
            </div>
            <div class="about_achievements-right">
                <h1>Achievements</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel error aliquid itaque laborum. Quae, fugit?

                </p>
                <div class="achievements_cards">
                    <article class="achievement_card">
                        <span class="achievement_icon">
                         <i class="uil uil-videos"></i>
                        </span>
                        <h3>90%</h3>
                        <p>PassOut</p>
                    </article>

                    <article class="achievement_card">
                        <span class="achievement_icon">
                         <i class="uil uil-videos"></i>
                        </span>
                        <h3>20,000+</h3>
                        <p>Students</p>
                    </article>

                    <article class="achievement_card">
                        <span class="achievement_icon">
                         <i class="uil uil-videos"></i>
                        </span>
                        <h3>10+</h3>
                        <p>Awards</p>
                    </article>

                </div>
            </div>
        </div>
    </section>


    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="container team_container">
            <?php
            require_once('db.php');

            // Fetch teacher details from the database
            $result = $conn->query("SELECT name, details, image FROM teachers");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<article class="team_member">';
                    echo '<div class="team_member-image">';
                    echo '<img src="uploads/' . $row['image'] . '" alt="' . $row['name'] . '">';
                    echo '</div>';
                    echo '<div class="team_member-info">';
                    echo '<h4>' . $row['name'] . '</h4>';
                    echo '<p>' . $row['details'] . '</p>';
                    echo '</div>';
                    echo '<div class="team_member-socials">';
                    echo '<a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>';
                    echo '<a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>';
                    echo '<a href="https://facebook.com" target="_blank"><i class="uil uil-facebook"></i></a>';
                    echo '</div>';
                    echo '</article>';
                }
            } else {
                echo '<p>No team members found.</p>';
            }

            $conn->close();
            ?>
        </div>
    </section>



    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>School</h4></a>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat maxime eveniet quisquam excepturi, porro sed..</p>
            </div>

            <div class="footer_2">
                <h4>Links</h4>
                <ul class="Links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Faqs</a></li>
                </ul>

            </div>


                <div class="footer_4">
                    <h4>Contact Us</h4>
                    <p>98XXXXXXXX</p>
                    <p>school@gmail.com</p>


                <ul class="footer_socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>

                </ul>

            </div>


        </div>
    </footer>

 
    <script src="./main.js"></script>
</body>
</html>
