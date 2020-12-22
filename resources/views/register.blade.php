<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <div>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    </div>

    <div>
        <form action="/welcome" method="POST">
        @csrf
        <label for="first">First Name:</label> <br> <br>
        <input type="text"  id="first" name="nama">
        <br>
        <br>    
        <label for="last" >Last Name:</label> <br> <br>
        <input type="text"  id="last" name="nama2"> <br> <br>    
        <label>Gender:</label> <br><br>
        <input type="radio" value="0">Male <br>
        <input type="radio" value="1">Female <br><br>
        <label>Nationality:</label> <br><br>
        <select>
            <option value="0">Indonesian</option>
            <option value="1">Singaporean</option>
            <option value="2">Malaysian</option>
            <option value="3">Australian</option>
        </select> <br><br>
        <label>Language Spoken:</label> <br><br>
        <input type="checkbox" value="">Bahasa Indonesia <br>
        <input type="checkbox" value="">English <br>
        <input type="checkbox" value="">Other <br><br>
        <label>Bio:</label> <br><br>
        <textarea cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up">
        </form>
    </div>


</body>
</html>