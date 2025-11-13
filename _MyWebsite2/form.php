<!DOCTYPE html>
<html>
<head>
    <m.eta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Website</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href="css/main.css">
    <script src='main.js'></script>
</head>
<body>
    <form action="includes/formhandler.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name"><br><br>
        
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" placeholder="Your surname"><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="usa">USA</option>
            <option value="canada">Canada</option>
            <option value="uk">UK</option>
            <option value="spain">Spain</option>
            <option value="other">Other</option>
        </select>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>