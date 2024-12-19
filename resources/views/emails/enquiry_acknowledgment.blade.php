<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Enquiry</title>
    <style>
        /* Overall Background */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Toolbar */
        .toolbar {
            background-color: #002855;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }

        /* Logo */
        .logo {
            height: 50px;
            vertical-align: middle;
        }

        /* Main Container */
        .container {
            background-color: #ffffff;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Header */
        h1 {
            color: #ff6a00;
            text-align: center;
            padding: 20px;
        }

        /* Content */
        p {
            color: #333333;
            line-height: 1.6;
            padding: 0 20px;
            font-size: 16px;
        }

        ul {
            color: #333333;
            font-size: 16px;
            padding-left: 40px;
        }

        /* Footer */
        .footer {
            background-color: #002855;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Toolbar with Logo -->
    <div class="toolbar">
        <span style="font-size: 18px; margin-left: 10px;">Archers Tours and Travel</span>
    </div>

    <!-- Email Content -->
    <div class="container">
        <h1>Thank You, {{ $enquiryData['name'] }}!</h1>
        <p>We have received your enquiry regarding "<strong>{{ $enquiryData['subject'] }}</strong>" and will get back to you as soon as possible.</p>
        <p>Your Enquiry Details:</p>
        <ul>
            <li>Package: {{ $enquiryData['package_details'] }}</li>
            <li>Phone: {{ $enquiryData['phone'] ?? 'Not provided' }}</li>
        </ul>
        <p>Best regards,<br>Archers Tours and Travel</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        © {{ date('Y') }} Archers Tours and Travel. All rights reserved.
    </div>
</body>
</html>
