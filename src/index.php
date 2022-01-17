<html lang="">
<head>
    <title>Calculator</title>
</head>
    <body>
        <form action="App/Classes/calculate.php" method="post">
            <p>Input 1st number:</p>
            <label for="1st">
                <input name="first" type="number">
            </label>
            <p>Select operand:</p>
            <label for="operand">operand</label>
            <select name="operand" id="operand">
                <option value="add">+</option>
                <option value="extract">-</option>
                <option value="multiply">*</option>
                <option value="division">/</option>
            </select>
            <p>Input 2nd number:</p>
            <label for="2nd">
                <input name="second" type="number">
            </label>
            <br>
            <br>
            <input name="submit" type="submit" value="Calculate">
        </form>
    </body>
</html>