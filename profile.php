<?php
session_start();
if (isset($_SESSION["id"]))
{
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Profile Edit</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <a href="index.php">Back</a>

        <div class="block">
            <h1>Hello, <?php echo $_SESSION["username"]; ?>!</h1>
            <img src="/webpage <?php echo $_SESSION["profileimage"]; ?>" alt="avatar" width="150" height="150">  
        </div>

        <div class="block">
            <p>Here you can edit your profile!</p>
            <form action="includes/profile.inc.php" method="POST" enctype="multipart/form-data">
                <input class="inputfile" type="file" name="profileimage" accept="image/*">
                <button type="submit" name="edit">Edit</button>
            </form>
        </div>

        <div class="block">
            <p>Change info.</p>
            <input name="first_name" placeholder="First name" type="text">
            <input name="last_name" placeholder="Last name" type="text">
            <button type="submit" name="change">Change</button>
        </div>

    </body>
    </html>

<?php
}
?>