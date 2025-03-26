<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('congrats-background.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.95); /* Slightly less transparent white */
            padding: 30px; /* Reduced padding */
            border-radius: 16px; /* More rounded corners */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15), 0 0 0 4px rgba(255, 255, 255, 0.5); /* Modern shadow and border */
            width: 85%; /* Slightly smaller container width */
            max-width: 450px; /* Slightly smaller max-width */
            color: #333;
        }
        h1 {
            font-size: 2.2em; /* Smaller header */
            color: #007bff;
            text-transform: uppercase;
            margin-bottom: 15px; /* Reduced margin */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        p {
            font-size: 1em;
            margin: 15px 0; /* Reduced margin */
            line-height: 1.6;
        }
        .bible-verse {
            font-style: italic;
            font-size: 0.9em; /* Smaller bible verse text */
            color: #007bff;
            margin-top: 20px; /* Reduced margin */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px; /* Smaller button */
            margin-top: 25px; /* Reduced margin */
            font-size: 0.95em; /* Smaller button text */
            color: white;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            border: none;
            border-radius: 10px; /* Slightly more rounded button corners */
            text-decoration: none;
            transition: background 0.3s ease;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
        }
        .btn:hover {
            background: linear-gradient(135deg, #5bc0de, #1886a0);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Congratulations, Camper!</h1>
        <p>Your registration for <strong>Youth Camp 2025</strong> is successful! We are thrilled to welcome you to this transformative journey.</p>
        <p class="bible-verse">"The Lord bless you and keep you; the Lord make his face shine on you and be gracious to you." - Numbers 6:24-25</p>
        <a href="JesusOverEverthing.php" class="btn">Go to Homepage</a>
    </div>
</body>
</html>