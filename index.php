<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booktabmarket.com</title>
    <style>
        
        body {
            background-image: url('cba8c85a56cb0e7d550bc856898b0f7c.jpeg');
            background-size: cover;
            font-family: 'Tahoma', sans-serif;
            direction: rtl;
            margin: 0;
            padding: 0;
            color: #333;
        }

        
        .container {
            max-width: 990px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        
        header {
            text-align: center;
            padding: 20px 0;
        }

        header img {
            width: 350px;
            height: auto;
        }

       
        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            background-color: #007bff;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        
        .content {
            text-align: right;
            line-height: 1.8;
        }

        .content h3 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .content p {
            margin: 10px 0;
        }

        .services p {
            color: red;
            margin: 5px 0;
            font-weight: bold;
        }

        
        footer {
            text-align: center;
            margin-top: 20px;
        }

        video {
            display: block;
            margin: 20px auto;
            border: 5px solid #007bff;
            border-radius: 10px;
        }

        
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            nav a {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="15456465.png" alt="Booktab Market">
        </header>
        <nav>
            <a href="https://booktabmarket.com/" target="_blank">خرید</a>
            <a href="https://booktabmarket.com/about-us" target="_blank">درباره‌ی بوکتاب</a>
            <a href="https://booktabmarket.com/login?returnUrl=%2F" target="_blank">ثبت نام/ورود</a>
            <a href="https://booktabmarket.com/contactus" target="_blank">تماس با ما</a>
        </nav>
        <section class="content">
            <h3>به نام خدا</h3>
            <p>باسلام،</p>
            <p>
                <?php
                    date_default_timezone_set('Asia/Tehran');
                    $hour = date('H');
                    if ($hour < 12) {
                        echo 'صبح بخیر! به وب سایت بوکتاب خوش آمدید.';
                    } elseif ($hour < 18) {
                        echo 'عصر بخیر! به وب سایت بوکتاب خوش آمدید.';
                    } else {
                        echo 'شب بخیر! به وب سایت بوکتاب خوش آمدید.';
                    }
                ?>
            </p>
            <p>امیدوارم که مطالب و مقالات موجود در این وب‌سایت برای شما عزیزان مفید باشد و بتوانید از مطالب این وب‌سایت در راستای بالا بردن سطح علمی جامعه بهره ببرید.</p>
            <p>بوکتاب خدمات زیر را انجام می‌دهد:</p>
            <div class="services">
                <p>کتاب</p>
                <p>لوازم و تحریر</p>
                <p>اسباب بازی</p>
                <p>ناشران</p>
                <p>تولید کنندگان</p>
            </div>
        </section>
        <footer>
            <video src="booktabbnd-.mp4" width="700" height="400" controls></video>
        </footer>
    </div>
</body>
</html>

