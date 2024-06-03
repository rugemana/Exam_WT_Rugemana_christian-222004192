<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Insurance Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .about-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 600px;
        }

        .about-section h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .about-section p {
            margin-bottom: 15px;
            color: #555;
        }

        .about-section .highlight {
            color: #007BFF;
        }

        .about-section button {
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .about-section button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="about-section">
        <h2>About Us</h2>
        <p>Welcome to <span class="highlight">Our Insurance Company</span>, your trusted partner in safeguarding your future. We offer a wide range of insurance products designed to meet your unique needs and provide peace of mind for you and your loved ones.</p>
        <p>Our mission is to deliver reliable and innovative insurance solutions with a commitment to exceptional customer service. With years of experience and a dedicated team of professionals, we are here to support you every step of the way.</p>
        <p>Thank you for choosing us as your insurance provider. We look forward to serving you.</p>
        <button id="learnMoreBtn">Learn More</button>
        <div id="moreInfo" style="display:none;">
            <p>At Our Insurance Company, we believe in putting our customers first. Our team is available to answer any questions you may have and help you find the best insurance options for your needs. Contact us today to learn more about our services and how we can help protect what matters most to you.</p>
        </div>
    </div>
    <script>
        document.getElementById('learnMoreBtn').addEventListener('click', function() {
            const moreInfo = document.getElementById('moreInfo');
            if (moreInfo.style.display === 'none') {
                moreInfo.style.display = 'block';
            } else {
                moreInfo.style.display = 'none';
            }
        });
    </script>
</body>
</html>
