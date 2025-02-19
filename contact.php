<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGAT Diamond Service.,Co.Ltd</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Basic reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #fdab53;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header .logo img {
            height: 50px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffe1ba;
        }
        
        .slider-container {
            position: relative;
            width: auto;
            max-width: auto;
            height: 450px; /* ปรับให้เหมาะกับขนาดภาพ */
            margin: 20px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .slides {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* ทำให้รูปเต็มพื้นที่ */
            border-radius: 12px;
        }

        .slide.active {
            opacity: 1;
        }

        /* ปุ่มเลื่อนซ้าย-ขวา */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 50%;
            font-size: 20px;
            transition: background 0.3s;
            z-index: 10;
        }

        .prev { left: 15px; }
        .next { right: 15px; }

        .prev:hover, .next:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px; /* ปรับความกว้างสูงสุด */
            margin: 40px auto; /* จัดให้อยู่ตรงกลางและเว้นระยะห่างด้านบนล่าง */
            text-align: center;
        }

        /* หัวข้อ */
        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* ฟอร์ม */
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        /* จัดแถวของชื่อ-นามสกุล */
        .row {
            display: flex;
            gap: 10px;
        }

        .row input {
            flex: 1;
        }

        /* อินพุต */
        input {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
            transition: 0.3s;
            width: 100%;
            text-align: auto;
            font-size: 14px;
        }

        input:focus {
            border-color: #FF5722;
            box-shadow: 0px 0px 10px rgba(255, 87, 34, 0.3);
        }

        /* ปุ่ม */
        button {
            background: #FF5722;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            background: #E64A19;
        }

        /* เช็คบ็อกซ์ */
        .checkbox {
            display: flex;
            align-items: auto;
            gap: auto;
        }

        .checkbox a {
            color: #FF5722;
            text-decoration: none;
        }

        .checkbox a:hover {
            text-decoration: underline;
        }

        /*map section*/
        .map-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .map-container {
            width: 100%;
            max-width: 1000px;
            border-radius: 12px;
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border-radius: 12px;
        }

        /* Indicators จุดบอกสถานะ */
        .indicators {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .indicator {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .indicator.active {
            background: #fdab53;
            transform: scale(1.2);
        }
        /* Map Section */
        .map-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 40px;
            text-align: center;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: auto;
        }

        .map-container, .company-details {
            flex: 1;
            min-width: 300px;
            max-width: 480px;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 350px;
            border-radius: 12px;
            border: none;
        }

        .company-details h2 {
            color: #fdab53;
            margin-bottom: 15px;
        }

        .company-details p {
            margin: 10px 0;
            color: #555;
            display: flex;
            /*align-items: center;*/
            gap: 10px;
            /*justify-content: center;*/
        }

        .company-details i {
            color: #fdab53;
        }

        .company-details a {
            color: #fdab53;
            text-decoration: none;
        }

        .company-details a:hover {
            color: #e8983f;
            text-decoration: underline;
        }

         /* Hero Section */
         .hero {
            text-align: center;
            background: linear-gradient(135deg, #fdab53, #e8983f);
            color: white;
            padding: 50px 20px;
            border-radius: 12px;
            margin-bottom: 40px;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero .btn-primary {
            display: inline-block;
            padding: 12px 25px;
            background-color: white;
            color: #fdab53;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .hero .btn-primary:hover {
            background-color: #ffe1ba;
            color: #e8983f;
            transform: scale(1.05);
        }

        /* Services Section */
        .services {
            padding: 40px 20px;
            text-align: center;
            margin-top: -100px; /* ลดระยะห่างด้านบน */
        }

        .services h2 {
            font-size: 28px;
            color: #fdab53;
            margin-bottom: 20px;
        }

        .service-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .service-cards .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        .service-cards .card i {
            font-size: 40px;
            color: #fdab53;
            margin-bottom: 10px;
        }

        .service-cards .card h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .service-cards .card p {
            font-size: 14px;
            color: #555;
        }

       /* About Section */
    .about {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 40px 20px;
        background: linear-gradient(90deg, #fdab53, #e89a3e); /* กำหนดสีพื้นหลังเป็นไล่จากซ้ายไปขวา */
        border-radius: 12px;
        margin-bottom: 40px;
        height: auto; /* กำหนดความสูงเพื่อให้อยู่กึ่งกลาง */
    }

    .about h2 {
        font-size: 28px;
        color: white; /* ใช้สีขาวเพื่อให้ตัวอักษรเด่นขึ้นบนพื้นหลัง */
        margin-bottom: 15px;
    }

    .about p {
        font-size: 16px;
        color: white; /* ใช้สีขาวเพื่อให้ตัวอักษรเด่นขึ้นบนพื้นหลัง */
        margin-bottom: 10px;
        max-width: 800px;
    }

        /* Footer Style */
        footer {
            background-color: #fdab53;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
            <div class="logo">
                <a href="./index.php"> <!-- เพิ่มแท็ก <a> รอบโลโก้ -->
                    <img src="./image/logo.png" alt="บริษัทอีแกท ไดมอนด์ เซอร์วิส จำกัด">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./product.php">Product</a></li>
                    <li><a href="./service.php">Service</a></li>
                    <li><a href="./news.php">News</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

    <main>
        <div class="slider-container">
        <div class="slides">
            <div class="slide active"><img src="./image/slide1.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="./image/slide2.jpg" alt="Slide 2"></div>
            <div class="slide"><img src="./image/slide3.jpg" alt="Slide 3"></div>
            <div class="slide"><img src="./image/slide4.jpg" alt="Slide 3"></div>
            <div class="slide"><img src="./image/slide5.jpg" alt="Slide 3"></div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
        <div class="indicators"></div>
    </div>
    <div class="container">
    <h2>Contact</h2>
    <form action="process-form.php" method="POST">
        <div class="row">
            <input type="text" name="name" placeholder="First Name" required>
            <input type="text" name="surname" placeholder="Last Name" required>
        </div>
        <input type="text" name="phone" placeholder="📞 Telephone Number" required>
        <input type="email" name="email" placeholder="✉️ Email Address" required>
        <input type="text" name="company" placeholder="🏢 Company Name">
        <input type="text" name="product" placeholder="🛍️ Interested Product">
        
        <!--<div class="checkbox">
            <label>
                <input type="checkbox" name="privacy" required>
                I have read and accept EDS Privacy Policy
            </label>
        </div>-->
        
        <button type="submit">Submit</button>
    </form>
</div>
    <section class="map-section">
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.149594137243!2d100.58751807456483!3d14.127298688490185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7f9dbe095555%3A0xc1c17fcd63faac0a!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4teC5geC4geC4lyDguYTguJTguKHguK3guJnguJTguYwg4LmA4LiL4Lit4Lij4LmM4Lin4Li04LiqIOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1739850265180!5m2!1sth!2sth" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="company-details">
            <h2>Contact Us</h2>
            <p><i class="fas fa-map-marker-alt"></i> 56/25 Moo20, Khlong Nueng, Khlong Luang, Pathumthani 12120.</p>
            <p><i class="fas fa-phone"></i> 02-529-0800</p>
            <p><i class="fas fa-phone"></i> 065-724-0429 (Marketing Flexxfast by EDS)</p>
            <p><i class="fas fa-envelope"></i> egatdiamondservice@gmail.com</p>
            <p><i class="fab fa-facebook"></i> <!--<a href="https://www.facebook.com/egatdiamondservice" target="_blank" style="color: #fdab53; text-decoration: none;">-->EGAT Diamond Service</a></p>
        </div>
    </section>
    </main>
    <script>
        let index = 0;
        const slides = document.querySelectorAll('.slide');
        const indicatorsContainer = document.querySelector('.indicators');

        function updateIndicators() {
            indicatorsContainer.innerHTML = "";
            slides.forEach((_, i) => {
                const dot = document.createElement("div");
                dot.classList.add("indicator");
                if (i === index) dot.classList.add("active");
                dot.onclick = () => goToSlide(i);
                indicatorsContainer.appendChild(dot);
            });
        }

        function goToSlide(i) {
            slides[index].classList.remove("active");
            index = i;
            slides[index].classList.add("active");
            updateIndicators();
        }

        function moveSlide(step) {
            slides[index].classList.remove("active");
            index = (index + step + slides.length) % slides.length;
            slides[index].classList.add("active");
            updateIndicators();
        }

        setInterval(() => moveSlide(1), 5000);
        updateIndicators();
</script>
    <footer>
        <p>© 2025 EGAT Diamond Service.,Co.Ltd.</p>
    </footer>
</body>
</html>