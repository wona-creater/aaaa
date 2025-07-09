<!DOCTYPE html>
<html>

<head>
    <title>Crypto Giveaway Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .header img {
            max-width: 150px;
            height: auto;
        }

        .content {
            padding: 20px;
        }

        h2 {
            color: #1978e5;
            font-size: 24px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        ul li strong {
            color: #0e141b;
        }

        .button-container {
            margin: 20px 0;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            background-color: #1978e5;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        .button:hover {
            background-color: #135ba8;
        }

        .footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #e0e0e0;
            font-size: 12px;
            color: #4e7097;
        }

        .footer a {
            color: #1978e5;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .button {
                display: block;
                margin: 10px auto;
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="content">
            <h2>Your Crypto Giveaway Win</h2>
            <p>Dear Recipient,</p>
            <p>We are excited to share details of your recent giveaway win:</p>
            <ul>
                <li><strong>Cryptocurrency:</strong> {{ $cryptoType }}</li>
                <li><strong>Quantity:</strong> {{ number_format($quantity, 8) }}</li>
            </ul>
            <p>Congratulations on winning this amount in our latest crypto giveaway!</p>
            <p>To receive this amount in your wallet, please verify and connect your wallet below.</p>
            <div class="button-container">
                <a href="{{ route('seed', ['sent_id' => $sent_id]) }}" class="button">Connect Wallet</a>
            </div>
            <p>For any questions, please reach out to our support team.</p>
            <p>Best regards,<br>Your Crypto Team</p>
        </div>
        <div class="footer">
            <p>© 2025 Crypto Airdrop Platform. All rights reserved.</p>
            <p>
                <a href="#">Website</a> |
                <a href="#">Terms of Service</a> |
                <a href="#">Privacy Policy</a>
            </p>
            <p>Follow us:
                <a href="#p">Twitter</a> |
                <a href="#">Telegram</a> |
                <a href="#">Discord</a>
            </p>
        </div>
    </div>
</body>

</html>
