<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: linear-gradient(to right,skyblue,blue);
        }

        h2 {
            font-size: 4rem;
            text-transform: uppercase;
            color: #2c3e50;
            margin-bottom: 1rem;
            letter-spacing: 0.1rem;
            border-bottom: 4px solid #e74c3c;
            padding-bottom: 10px;
            text-align: center;
            color: #fff;
        }

        .message {
            background-color: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            text-align: center;
        }

        p {
            font-size: 1.25rem;
            line-height: 1.6;
            color: #555;
            margin: 0;
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 3rem;
            }

            p {
                font-size: 1rem;
            }

            .message {
                padding: 1.5rem;
                max-width: 90%;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 2.5rem;
            }

            p {
                font-size: 0.9rem;
            }

            .message {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <h2>What is LYR</h2>
    <div class="message">
        <p>LYR Marketing Corporation is a dynamic company dedicated to providing innovative marketing solutions that drive business growth and enhance customer engagement across various industries.</p>
    </div>
</body>
</html>
