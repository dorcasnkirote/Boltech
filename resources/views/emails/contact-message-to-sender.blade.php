<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Have Received Your Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .email-container {
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        .header {
            background-color: #003366; /* Navy color */
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
        }
        .content strong {
            color: #003366; /* Navy color */
        }
        .footer {
            background-color: #ff6600; /* Orange color */
            color: #ffffff;
            text-align: center;
            padding: 10px;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>Hello, {{ $name }}</h2>
        </div>
        <div class="content">
            <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
            <p><strong>Your Message:</strong></p>
            <p><strong>Subject:</strong> {{ $subject }}</p>
            <p><strong>Message:</strong> {{ $content }}</p>
        </div>
        <div class="footer">
            <p>Best regards,</p>
            <p>Archers Tours & Travel Ltd.</p>
        </div>
    </div>
</body>
</html>
