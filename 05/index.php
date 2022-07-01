<?php include "header.php" ?>


<course-search>
    <form method="post">
        <h2>Course input:</h2>
        <input type="text" name="course" id="course"></input>
        <input type="submit" name="add" id="add" value="ADD" class="button addbutton"></input>
    </form>
</course-search>
<course-list>
    <form>
        <h2>My Courses</h2>

        <?php include "courseList.php" ?>

    </form>
</course-list>
<?php include "footer.php" ?>