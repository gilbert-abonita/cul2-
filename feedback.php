<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Display</title>
    <style>
        /* Your CSS styles here */
        body {
    background-image: url("cul5.png");
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0; /* Remove default body margin */
}

.container {
    width: 50%;
    padding: 20px;
    border: 3px solid black;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8); /* Add background color with opacity */
}


        h2 {
            text-align: center;
            font-family: tahoma;
        }

        .feedback {
            margin-bottom: 20px;
            font-family: tahoma;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #facf64;
            color: black;
            border: 2px solid #facf64;
            border-radius: 5px;
            cursor: pointer;color: black;
            font-weight: bold;
            transition: 0.4s;
            text-decoration: none;
        }
        p{
            font-family: tahoma;
            font-size: 15px;
            text-align: center;
        }

        button:hover {
    background-color: transparent;
    border: 2px solid #facf64;
    cursor: pointer;
        }

        .back-btn {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Feedback Received</h2>
        <div class="feedback">
            <!-- Display the received feedback here -->
            <?php
                // Check if feedback has been echoed
                if (isset($_GET['feedback'])) {
                    $feedback = $_GET['feedback'];
                    echo "<p>$feedback</p>";
                }
            ?>
        </div>
        <div class="back-btn">
            <a href="index.php"><button>Back to Homepage</button></a>
        </div>
        <p>Thank you for your feedback!</p>
    </div>
</body>
</html>
