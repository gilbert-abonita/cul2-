<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link rel="stylesheet" href="book.css">
    <style>
        .btn{
    text-decoration:none;
    background-color:brown;
    color:black;
    font-weight:bold;
    padding:10px 25px;
    border-radius:35px;
    transition:transform 0.4s;
    text-align: center; 
    margin-left: 140px;
}

.btn:hover{
    transform:scale(1.5);
}
    </style>
</head>
<body>
    <form action="book2.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br><br>
        <input type="submit" value="Book">
        <a href='booking.php' class='btn'>Go back</a>
    </form>
</body>
</html>
