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

        .image-gallery {
            max-width: 1200px;
            margin: 40px auto;
            text-align: center;
            padding: 0 20px;
        }

        .image-gallery h2 {
            margin: 40px 0 20px;
            font-size: 50px;
            color: #333;
        }

        .gallery-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .gallery-row img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .gallery-row img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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
    .about-section {
            background: linear-gradient(135deg, #fdab53, #e8983f);
            color: white;
            text-align: center;
            padding: 60px 20px;
            border-radius: 12px;
            max-width: 900px;
            margin: 40px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .about-section h1 {
            font-size: 36px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .about-section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            text-align: justify;
        }

        .about-section p:last-child {
            margin-bottom: 0;
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
            <div class="slide"><img src="./image/slide4.jpg" alt="Slide 4"></div>
            <div class="slide"><img src="./image/slide5.jpg" alt="Slide 5"></div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
        <div class="indicators"></div>
    </div>
    <div class="about-section">
        <h1>About Us</h1>
        <p>
                EDS is a leading gas turbine refurbishment service center. EDS provides the gas turbine hot parts repair and refurbishment services for the power generation system with OEM-quality service technologies underMitsubishi Heavy Industries, Ltd. (MHI) 
            global network,the “Diamond Service Network” for over 15 years. EDS founded on strengths in technical and engineering knowledge and know-how, experienced expertise and innovative OEM-technology.
        </p>
        <p>
                The state-of-the-art service workshop covers specialized needs of gas turbine components of power generation for comprehensive range of life-extending and the gas turbine components performance-enhancing. 
            Under OEM-trained engineers and technicians, EDS team can perform every step of refurbishment solutions.EDS maintains extensive capabilities for the repair and refurbishment of focused gas turbine hot gas path parts components: 
            combustor basket, transition piece, turbine bland and turbine vane. Our gas turbine component repair services are renowned for OEM-quality standard at competitive cost.
        </p>
    </div>
    <div class="image-gallery">
        <div class="gallery-row">
            <img src="./image/about7.jpg" alt="about7">
            <img src="./image/about1.jpg" alt="about1">
            <img src="./image/about6.jpg" alt="about6">
            <img src="./image/about5.jpg" alt="about5">
        </div>
        <h2>Our Customer</h2>
        <div class="gallery-row">
            <img src="./image/about4.jpg" alt="about4">
            <!--<img src="./image/about3.jpg" alt="about3">-->
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