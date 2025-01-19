<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizTester - Online Quiz System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #ffffff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2563eb;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #1f2937;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        .hero {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            min-height: 600px;
            padding: 8rem 2rem 4rem 2rem;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #ffffff;
            color: #2563eb;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: transform 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-2px);
        }

        .features {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 3rem;
            color: #1f2937;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }

        .feature-card i {
            font-size: 2rem;
            color: #2563eb;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .feature-card p {
            color: #6b7280;
            line-height: 1.6;
        }

        footer {
            background-color: #1f2937;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-content">
            <a href="home.php" class="logo">QuizTester</a>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="home.php">Contact Us</a>
                <a href="about.php">About Us</a>
                <a href="list.html">Quizzes</a>
                <a href="dashboard.php">Suggestion</a>
                <a href="home.php">FAQ</a>

                <a href="php/logout.php"> Log Out </a>
                
                

            </div>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            ?>


        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Test Your Knowledge with QuizTester</h1>
                <p>Join us in our courase project and take quizzes to inhance your knowledge in various topics about the CS.</p>
                <a href="register.php" class="cta-button">Get Started</a>
            </div>
        </div>
    </section>

    <section class="features">
        <h2>Why Choose QuizTester?</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <i>📚</i>
                <h3>Diverse Topics</h3>
                <p>Access quizzes on various subjects, from academic topics to general knowledge.</p>
            </div>
            <div class="feature-card">
                <i>⚡</i>
                <h3>Instant Results</h3>
                <p>Get immediate feedback on your performance and detailed explanations.</p>
            </div>
            <div class="feature-card">
                <i>📊</i>
                <h3>keep learning</h3>
                <p>check us once in while to test yourself and keep knowledge about CS .</p>
            </div>
            <div class="feature-card">
                <i>🏆</i>
                <h3>Compete</h3>
                <p>Compete yourself in your Computer Knowledge.</p>
            </div>
        </div>
    </section>

   

    <footer>
        <p> This website is made by Student in Web Devolpment course</p>
        <p>&copy; 2025 QuizTester. All rights reserved.</p>
    </footer>
    
</body>
</html>