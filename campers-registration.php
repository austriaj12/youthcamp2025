<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campers Registration</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url('background-registration.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .header {
            text-align: center;
            font-size: 3em;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        h2 {
            font-size: 2em;
            font-weight: bold;
            color: #003366;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .input-box {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-box label {
            font-size: 1em;
            font-weight: bold;
            color: #0056b3;
            display: block;
            margin-bottom: 5px;
        }

        .input-box input, 
        .input-box select, 
        .input-box textarea {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            outline: none;
            background: white;
            color: #333;
            font-size: 1em;
            transition: border-color 0.3s ease;
        }

        .input-box input:focus,
        .input-box textarea:focus {
            border-color: #0056b3;
        }

        .row {
            display: flex;
            gap: 20px;
        }

        .row .input-box {
            flex: 1;
        }

        .register-btn {
            background-color: #0056b3;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            width: 100%;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .register-btn:hover {
            background-color: #004494;
        }

        @media (max-width: 600px) {
            .row {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="header">Youth Camp 2025</div>

    <div class="container">
        <h2>Registration Form</h2>

        <form action="submit-registration.php" method="POST">
            <div class="input-box">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="input-box">
                <label for="nickname">Nickname (For Name Tag):</label>
                <input type="text" id="nickname" name="nickname" required>
            </div>

            <div class="input-box">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="row">
                <div class="input-box">
                    <label for="contact">Contact Number:</label>
                    <input type="tel" id="contact" name="contact" required>
                </div>

                <div class="input-box">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" min="1" max="100" required>
                    </div>
            </div>

            <div class="input-box">
                <label for="birthdate">Birth Date:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="input-box">
                <label for="church">Church Name:</label>
                <input type="text" id="church" name="church" required>
            </div>

            <div class="input-box">
                <label for="church_address">Church Address:</label>
                <input type="text" id="church_address" name="church_address" required>
            </div>

            <div class="input-box">
                <label for="pastor">Head Pastor:</label>
                <input type="text" id="pastor" name="pastor" required>
            </div>

            <div class="input-box">
                <label>How many years have you been Christian?</label>
                <select name="years_christian" required>
                    <option value="1 year below">1 year below</option>
                    <option value="1-3 years">1-3 years</option>
                    <option value="3-5 years">3-5 years</option>
                    <option value="5-10 years">5-10 years</option>
                    <option value="10 years above">10 years above</option>
                    <option value="Not Yet">Not Yet</option>
                </select>
            </div>

            <div class="input-box">
                <label>Delegations:</label>
                <select name="delegation" required>
                    <option value="Camper">Camper</option>
                    <option value="Staff">Staff</option>
                    <option value="Pastor">Pastor</option>
                </select>
            </div>

            <div class="input-box">
                <label for="suggestions">Feel free to leave your suggestions:</label>
                <textarea id="suggestions" name="suggestions" rows="3"></textarea>
            </div>
  
    <button type="submit" class="register-btn">Register Now</button>

</body>
</html>
