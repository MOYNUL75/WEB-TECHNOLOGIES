<!DOCTYPE html>
<html>
<body>

<h2>HTML Form with Different Input Types</h2>

<form action="/submit_form" method="post">

    <!-- Text Input -->
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname"><br><br>

    <!-- Textarea -->
    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" cols="30">The cat was playing in the garden.</textarea><br><br>

    <!-- Button -->
    <input type="button" value="Click Me"><br><br>

    <!-- Checkbox -->
    <label for="subscribe">
        <input type="checkbox" id="subscribe" name="subscribe"> Subscribe to Newsletter
    </label><br><br>

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <!-- File -->
    <label for="file">Upload File:</label>
    <input type="file" id="file" name="file"><br><br>

    <!-- Hidden -->
    <input type="hidden" name="hiddenValue" value="12345">

    <!-- Image -->
    <label for="submitImage">Submit with Image:</label>
    <input type="image" src="submit.png" alt="Submit" id="submitImage"><br><br>

    <!-- Month -->
    <label for="birthmonth">Birth Month:</label>
    <input type="month" id="birthmonth" name="birthmonth"><br><br>

    <!-- Number -->
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" max="10"><br><br>

    <!-- Password -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <!-- Radio -->
    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>

    <!-- Range -->
    <label for="volume">Volume:</label>
    <input type="range" id="volume" name="volume" min="0" max="100"><br><br>

    <!-- Submit Button -->
    <input type="submit" value="Submit">

</form>

</body>
</html>
