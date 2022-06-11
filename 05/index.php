<html>

<head>
    <title>Super Slick Course Manager</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: small
        }

        fieldset {
            border: none;
        }

        h1 {
            font-size: large;
        }

        h2 {
            font-size: medium;
        }

        label {
            font-size: small;
        }

        .button {
            font-size: xx-small;
        }

        .addbutton {
            background-color: green;
            color: white;

        }

        .delbutton {
            background-color: maroon;
            color: white;
        }
    </style>


</head>

<body>
    <header>
        <h1>Super Slick Course Manager
    </header>
    <course-search>
        <form>
            <h2>Course Search:</h2>
            <input type="text" name="course" id="course"></input>
            <input type="submit" name="add" id="add" value="ADD" class="button addbutton"></input>
        </form>
    </course-search>
    <course-list>
        <form>
            <h2>My Courses</h2>
            <fieldset>
                <input type="checkbox" name="comp3012" id="comp3012">
                <label for="comp3012">COMP 3012</label>
                <input type="button" name="delete3012" id="delete3012" class="button delbutton" value="DELETE">
            </fieldset>
            <fieldset>
                <input type="checkbox" name="comp3015" id="comp3015">
                <label for="comp3015">COMP 3015</label>
                <input type="button" name="delete3015" id="delete3015" class="button delbutton" value="DELETE">
            </fieldset>
            <fieldset>
                <input type="checkbox" name="comp3012" id="comp3012">
                <label for="comp3603">COMP 3603</label>
                <input type="button" name="delete3603" id="delete3603" class="button delbutton" value="DELETE">
            </fieldset>
        </form>
    </course-list>
</body>


</html>