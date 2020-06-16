<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
    name:    <input type="text" name="name"><br><br>
    surname: <input type="text" name="surname"><br><br>
    What's your fav colour : </br>
    red<input type="checkbox" name="color[]" value="red"><br>
    blue<input type="checkbox" name="color[]" value="blue"><br>
    black<input type="checkbox" name="color[]" value="black"><br><br>
    do u play cricket? : <br>
    yes <input type="radio" value="yes" name="ans"><br>
    no <input type="radio" value="no" name="ans"><br>
    in which city u live?
    <select name="city">
    <option value="lko">lucknow</option>
    <option value="knp">kanpur</option>
    <option value="del">delhi</option>
    </select>
    email<input type="email" name="mail"><br><br>
<br><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>