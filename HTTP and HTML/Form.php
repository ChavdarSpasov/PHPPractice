<thml xmlns="http://www.w3.org/1999/html">
    <head>
        <title>test</title>
    </head>
    <body>
    <form method="post" action="">
        text
        <p>Homework: exercise forms </p>

        <input type="text" placeholder="Write some text!" name="text"></br>

        <select name="select" >
            <option selected hidden>Select car:</option>
            <option value="honda" pla>Honda</option>
            <option value="opel" pla>Opel</option>
            <option value="bmv" pla>BMW</option>
            <option value=saab pla>Saab</option>
        </select>

        <select name="optSelect">
            <option selected hidden>Meals</option>
            <optgroup label="mealOne">
                <option value="chicken">chicken</option>
            </optgroup>
            <optgroup label="mealTwo">
                <option value="eggs">eggs</option>
            </optgroup>
        </select>

        <br>

        <input type="checkbox" name="checkbox" value="bike">Bike
        <input type="checkbox" name="checkbox" value="car">Car
        <input type="checkbox" name="checkbox" value="walk">Walk

        <br>

        <fieldset>
            <input type="radio" value="one">One
            <input type="radio" value="two">Two
        </fieldset>
        <fieldset>
            <input type="radio" name="three">Three
            <input type="radio" name="four">Four
        </fieldset>

        <input type="date" name="day"><br>

        <input type="color" name="color"><br>

        <textarea name="textarea" id="" cols="50" rows="5" placeholder="Write test!"></textarea><br>

        <input type="email" name="mail" placeholder="your mail"><br>

        <input type="range" name="range" ><br>

        <input type="submit" name="sub">

    </form>
    </body>
</thml>
