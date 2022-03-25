<h1>Student Documents Checkup</h1>
    <form action="/upload-docs" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>
        <label for="phone">Phone:</label><br>
        <input type="number" id="phone" name="phone" value=""><br><br>
        <label for="cgpa">CGPA:</label><br>
        <input type="text" id="cgpa" name="cgpa" value=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    