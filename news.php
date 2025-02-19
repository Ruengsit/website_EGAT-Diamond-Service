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

    /* NEWS Section */
    .news-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .news-section h2 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .news-item {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .news-item:hover {
            transform: translateY(-5px);
        }

        .news-item img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .news-item h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .news-item .date {
            font-size: 14px;
            color: #888;
            margin-bottom: 10px;
        }

        .news-item .excerpt {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
            text-align: justify;
            line-height: 1.5;
        }

        .read-more {
            display: inline-block;
            padding: 10px 20px;
            background: #fdab53;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            transition: background 0.3s;
            font-weight: bold;
        }

        .read-more:hover {
            background: #e8983f;
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
                    <img src="./image/logo.png" alt=">EGAT Diamond Service.,Co.Ltd">
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
        <?php
        // ตัวอย่างข้อมูลข่าวแบบ Array (จำลอง)
        $newsList = [
            [
                "title"   => "The Governor of the Electricity Generating Authority of Thailand, along with the executives and delegation, visited EGAT Diamond Service Co., Ltd. (EDS).",
                "date"    => "August 18, 2024",
                //"excerpt" => "ผู้บริหาร และคณะอีแกท ไดมอนด์เซอร์วิส (EDS) เข้าพบและพูดคุยถึงความร่วมมือทางธุรกิจ...",
                "image"   => "./image/news1.jpg",
                "link"    => "./details1.php"
            ],
            [
                "title"   => "The team of design engineers and technical production team of the Flexxfast by EDS DC charger have selected high-quality equipment that meets European standards.",
                "date"    => "March 8, 2024",
                //"excerpt" => "เครื่องมือชาร์จรถยนต์ไฟฟ้า และเทคโนโลยีล่าสุดจาก EDS ที่พร้อมรองรับอนาคต...",
                "image"   => "./image/news2.jpg",
                "link"    => "./details2.php"
            ],
            [
                "title"   => "The production of power plant spare parts supports stability and promotes continuous electricity generation.",
                "date"    => "September 10, 2023",
                //"excerpt" => "EDS พร้อมสนับสนุนการติดตั้งโซล่าโฟลทลอยน้ำ เพื่อให้สามารถผลิตไฟฟ้าได้อย่างมีประสิทธิภาพ...",
                "image"   => "./image/news3.jpg",
                "link"    => "./details3.php"
            ],
            [
                "title"   => "Thai Honda Co.,Ltd.(Thailand) and Asian Honda Motor Co., Ltd.(Thailand) visit EGAT Diamond Service.,Co.Ltd.",
                "date"    => "November 29, 2024",
                //"excerpt" => " ",
                "image"   => "./image/news4.jpg",
                "link"    => "./details4.php"
            ]
        ];
        ?>

         <!-- Section News -->
         <section class="news-section">
            <h2>NEWS</h2>
            <div class="news-container">
                <?php foreach($newsList as $news): ?>
                    <div class="news-item">
                        <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
                        <h3><?php echo $news['title']; ?></h3>
                        <p class="date"><?php echo $news['date']; ?></p>
                        <!--<p class="excerpt"><?php //echo $news['excerpt']; ?></p>-->
                        <a class="read-more" href="<?php echo $news['link']; ?>">Read More</a>
                    </div>
                <?php endforeach; ?>
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
        <p>© 2025 EGAT Diamond Service.,Co.Ltd</p>
    </footer>
</body>
</html>