<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGAT Diamond Service.,Co.Ltd.</title>
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
            gap: 20px;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
            max-width: 1000px;
        }

        .map-container, .company-details {
            flex: 1;
            min-width: 300px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border-radius: 12px 12px 0 0;
            border: none;
        }

        .company-details {
            padding: 20px;
        }

        .company-details h2 {
            color: #fdab53;
            margin-bottom: 15px;
        }

        .company-details p {
            margin: 10px 0;
            color: #555;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .company-details i {
            color: #fdab53;
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
                    <img src="./image/logo.png" alt="EGAT Diamond Service.,Co.Ltd.">
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
    <div class="news-container">
        <h1 style="font-size: 40px;  margin-bottom: 15px; font-weight: bold; text-align: center;">
            The production of power plant spare parts supports stability and promotes continuous electricity generation.
        </h1> 
        <div class="news1">
            <!--<p style="font-size: 20px; text-align: center;">
                The Flexxfast by EDS DC Charger meets European quality, efficiency, and safety standards. 
                It has undergone rigorous testing and has been certified with IEC 61851-1, IEC 61851-23, and IEC 61851-24 standards by PTEC, NSTDA.
                Safety is a top priority, ensuring maximum protection for all electric vehicle users, regardless of brand.
            </p>-->
            <img src="./image/news3.jpg" alt="news3">
        </div>
        <p style="font-size: 20px; text-align: center;">
            This is another key mission that the company prioritizes, in addition to its GT Refurbishment business for gas turbine component repairs and the DC Charger manufacturing business. 
            These efforts support Thailand’s transition toward electric vehicles (EVs).
        </p>
        <div class="news0">
            <img src="./image/home1.jpg" alt="home1"><br><br>
            <p style="font-size: 20px; text-align: center;">
                EDS prioritizes and is committed to providing Diverter Valve manufacturing for power plants, 
                enhancing material properties for improved corrosion resistance using Corrosion and Material Selection principles. 
                The company also applies Reverse Engineering techniques to refine its products.
                EDS has successfully manufactured, tested, and delivered these valves to customers, earning their trust. 
                As a result, customers have continued to place orders for additional spare parts, further strengthening EDS’s role as a reliable supplier.
            </p>
        </div>
    </div>    
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