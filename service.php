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
</head>
<body>
    <!--Service Section-->
    <div class="service" id="services">
        <div class="title">
            <h2>Package deals</h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fas fa-suitcase"></i>
                <h5>Package 1</h5>
                <div class="para">
                    <p> Studen-Trip (₱259) </p>
                    <p style="text-align:center;">
                        <a class="button" href="pac.php">See Package</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-suitcase"></i>
                <h5>Package 2</h5>
                <div class="para">
                    <p> Gunita Package (₱459) </p>
                    <p style="text-align:center;">
                        <a class="button" href="pac2.php">See Package</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-suitcase"></i>
                <h5>Package 3</h5>
                <div class="para">
                    <p>Marahuyo Package (₱759)</p>
                    <p style="text-align:center;">
                        <a class="button" href="pac3.php">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="button-container" style="text-align: center;">
        <button onclick="goBack()">Go Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
