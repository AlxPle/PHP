<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<!-- This is a simple form page that submits data to process.php for handling.  -->

<body style="background-color: #aeabab;">

    <form action="process.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
    <a href="list.php">View Feedback List</a>
</body>

</html>