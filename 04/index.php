<html>
<div>
    <form
        action="results.php"
        method="post"
        enctype="multipart/form-data">

        <div>
            <label>Username</label>
            <input type="text" name="username"/>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password"/>
        </div>
        <div>
            <label>First Name</label>
            <input type="text" name="firstname"/>
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastname"/>
        </div>

        <div>
            <label>Profile Picture</label>
            <input type="file" name="profile_picture"/>
        </div>
        <div>
            <input type="submit" value="Upload!"/>
        </div>
    </form>
</div>
</html>