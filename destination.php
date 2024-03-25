<!DOCTYPE html>
<html lang="en">
<head>
    <title>CulToura</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"><!--to get font family online-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--for fontawesome-->
    <link rel="stylesheet" href="style3.css">
    <style>
         body{
            position: relative;
            display: flex;
            height: 100vh;
            width: 100vw;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-image: url("cul5.png");
            background-size: cover;
         }
         .image-box {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); /* Adjust the column size */
            grid-gap: 10px; /* Adjust the gap between images */
            width: 400px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the box horizontally */
            padding: 20px; /* Add some padding */
            border: 1px solid #ccc; /* Add border */
            border-radius: 10px; /* Add border-radius for rounded corners */
        }

        .image-box img {
            width: 100%; /* Adjust the width of each image to fit the grid */
            height: auto; /* Maintain the aspect ratio */
            border-radius: 5px; /* Add border-radius for rounded corners */
        }
        h1 {
            color: #facf64;
            font-size: 36px; /* Adjust the font size as needed */
            margin-bottom: 20px;
             text-shadow: -1px -1px 0 #8B4513,  
             1px -1px 0 #8B4513,
             -1px 1px 0 #8B4513,
             1px 1px 0 #8B4513; /* Add margin below the title */
        }
    </style>
</head>
<body>
    <section class="about" id="about">
        <div class="main">
            <h1>Virtual Destination</h1> <!-- Title is now on top -->
            <div class="image-box">
                <img src="ds1.png" alt="ds1.png">
                <img src="ds2.png" alt="ds2.png">
                <img src="ds3.png" alt="ds3.png">
                <img src="ds4.png" alt="ds4.png">
                <img src="ds5.png" alt="ds5.png">
                <img src="ds6.png" alt="ds6.png">
                <img src="ds7.png" alt="ds7.png">
                <img src="ds8.png" alt="ds8.png">
                <img src="ds9.png" alt="ds9.png">
                 <!-- New image -->
            </div>
            <footer>
            <div class="about-txt">
                <button onclick="goBack()">Go Back</button>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
            </div>
        </footer>
        </div>
    </section>
</body>
</html>
