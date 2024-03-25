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
        * {
            padding: 0;
            margin: 0;
            font-family: 'Josefin Sans', sans-serif;
            box-sizing: border-box;
        }

        .about {
            width: 100%;
            padding: 100px 0px;
            background-color: black;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .main {
            width: 100%;
            max-width: 2000px;
            margin: 0 auto;
            text-align: center; /* Center text */
        }

        .about-txt h5 {
            color: black;
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center; /* Center text */
            margin-left: auto;
            margin-right: auto;
        }

        .about-txt p {
            color: black;
            font-size: 18px;
            line-height: 20px;
            margin-bottom: 20px;
            text-align: justify; /* Center text */

        }

        .about-txt button {
            color: black;
            font-weight: bold;
            font-size: 16px;
            background-color: #facf64;
            text-decoration: none;
            border: 2px solid #facf64;
            border-radius: 50px;
            padding: 15px;
            transition: 0.4s;
            display: inline-block; /* Make button display inline */
            margin-top: 20px; /* Add margin to top */
        }

        .about-txt button:hover {
            background-color: transparent;
            border: 2px solid #facf64;
            cursor: pointer;
        }
    </style>
    </head>
    <body>
         <!--About Section-->
        <!--The <section> tag defines a section in a document. Browser Support. The numbers in the table specify the first browser version that fully supports the element.-->
        <section class="about" id="about">
            <div class="main">
                <div class="about-txt">
                    
                    <h5>“VIRTUAL ESCAPADE AWAITS”</h5>
                    
<p>CulToura is a leading provider of digital travel experiences in the Philippines. As a Virtual Experience Specialist you will be responsible for curating and creating immersive virtual photography tours of popular tourist destinations across the Philippines. This role will also involve Pselecting and designing unique souvenirs that capture the essence of each destination to offer our customers a truly memorable experience.</p>

<p>Additionally, CulToura offers a wide range of souvenir options inspired by each selected tourist destination in the Philippines. As a Virtual Experience Specialist you will have the opportunity to work closely with the design team to develop custom souvenirs that capture the essence and uniqueness of each location and offering customers a tangible memento of their virtual journey.</p>
                    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
                </div>
            </div>
        </section>
    </body>
</html>