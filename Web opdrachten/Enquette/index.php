<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Form</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="form">
            <form action="backend/questController.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name">
                    </div>

                <div class="form-group">
                    <label for="year">School year:</label>
                    <input type="number" name="class">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name="date">
                </div>

                <div class="form-group">
                    <label for="class">Favorite subject:</label>
                    <input type="radio" name="favclass" value="WIN">
                    <label for="favclass1">Windows-Development</label>
                    <input type="radio" name="favclass" value="WEB">
                    <label for="favclass2">Web-Development</label>
                </div>

                <div class="form-group">
                    <label for="name">Best site for help:</label>
                    <input type="url" name="besthelp">
                </div>

                <div class="form-group">
                    <label for="enjoyment">Hoe leuk is deze opleiding?</label>
                    <input type="range" name="enjoyment">
                </div>

                <div class="form-group">
                    <input type="checkbox">
                    <label for="phone">Was dit een goede enquette?</label>
                </div>

                <div class="form-group">
                    <label for="timing">Hoe lang duurde de enquette?</label>
                    <input type="time" name="time">
                </div>
                <div class="form-group">
                    <label for="week">Welke week is het?</label>
                    <input type="week" name="week">
                </div>

                <input type="submit" value="Send">
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>