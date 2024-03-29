<!--?xml version="1.0" encoding="UTF-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- XML/XHTML boilerplate code -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Computer Science Hub</title>
    <link rel = "stylesheet" href = "style.css">
    <script src = "projectFunctions.js"></script>
</head>

<body>
    <header class = "mainheader">
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner1">
        
        <nav>
            <ul>
                <li><a href = "homepage.html">Home</a></li>
                <li><a href = "courses.html">Courses</a></li>
                <li><a href = "contact.php" class = "current">Contacts</a></li>
                <li><a href = "resource.php">Resources</a></li>
                <li><a href = "tutorials.html">Tutorials</a></li>
            </ul>
        </nav>
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner2">
    </header>
    <section style = "border: 1px solid #ddd;text-align:center;align-items:center;line-height:1;padding:10px;margin:10px;">
    
    <img src = "iconcontact.png" alt = "Icon image of a contact email" style = "height: 150px;">
    <h2> Contact Me </h2>
    <!--The contact form-->
        <form action="formProcess.php" method="post" class = "formContact" id = "contact-forms" onsubmit="return validateForm()">
            <!--MUST INCLUDE NAME-->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <!--MUST INCLUDE EMAIL-->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <!--MUST INCLUDE MESSAGE-->
            <label for="message" >Message:</label>
            <textarea id="message" name="message"  rows="3" required></textarea>
            <!--SUBMIT WHEN DONE-->
            <button type="submit" value = "Submits">Submit</button>
            <div id="formFeedback"><?php if (isset($feedback)) echo $feedback; ?></div>
        </form>
       <h2>Shoot Me an email</h2>
       <h3>Please Enter Valid Characters</h3>
    </section>

    <footer class = "site-footer">
        <h3>&copy;2024 Computer Science Hub</h3>
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner3">
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner4">
        </footer>
    
</body>