<!--?xml version="1.0" encoding="UTF-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- XML/XHTML boilerplate code -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Computer Science Hub</title>
    <link rel = "stylesheet" href = "style.css">
        
</head>

<body>
    <header class = "mainheader">
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner1">

        <nav>
            <ul>
                <li><a href = "homepage.html">Home</a></li>
                <li><a href = "courses.html">Courses</a></li>
                <li><a href = "contact.php">Contacts</a></li>
                <li><a href = "resource.php" class = "current">Resources</a></li>
                <li><a href = "tutorials.html">Tutorials</a></li>
            </ul>
        </nav>
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner2">
    </header>
    <!--Show resources-->
    <h1 style = "text-align:center">Student Resources</h1>
    <section style = "align-items: center;justify-content:center;text-align:center;padding-top:10px">
    <!--Form for uploading resources-->
        <form enctype="multipart/form-data" method = "post" action = "upload_resources.php">
            <label for = "file">Upload Resources</label>
            <input type = "file" name = "file" id = "file">
            <input type="submit" value="Upload File" name="submit">

        </form>
        
    </section>
    <!--Where resources displayed as a grid pattern-->
    <h2>Uploaded Resources</h2>
    <div id="uploaded-resources">
        <?php include "display_resources.php"; ?>
        <!-- Uploaded resources will be displayed here -->
    </div>
    <!--Show resources of various kinds as a grid pattern displayed by each other-->
    <h2>Resources</h2>
    <section class = "grid"  >
        <section class = "cell">
            <h3>Artificial Intelligence (AI)</h3>
                <p>AI is changing the world</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://builtin.com/artificial-intelligence/artificial-intelligence-future">Future of AI</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Xv6 PDF (COMP 3300)</h3>
                <p>PDF to the textbook for xv6</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://pdos.csail.mit.edu/6.828/2018/xv6/book-rev11.pdf">Xv6 PDF</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Computer Skills: What are they and How to Improve?</h3>
                <p>Great for when applying to computer-based jobs</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://www.coursera.org/articles/computer-skills">What are and improve computer skills</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Get Better and Understand Computers</h3>
                <p>Languages, Fundamentals, Concepts, Topics, etc.</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://www.tutorialspoint.com/index.htm">Enhance your computer knowledge</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Machine Learning</h3>
                <p>Get to know and explore your Machine Learning Algorithms</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://www.geeksforgeeks.org/machine-learning-algorithms/">Understand Machine Learning</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Cloud Computing</h3>
                <p>What is Cloud Computing</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://azure.microsoft.com/en-us/resources/cloud-computing-dictionary/what-is-cloud-computing">Know Cloud Computing</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Understand Cybersecurity</h3>
                <p>What is it, the goal, and what threatens security</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://www.ibm.com/topics/cybersecurity">Get to know Cybersecurity</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Information Technology (IT)</h3>
                <p>What to know</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://www.techtarget.com/searchdatacenter/definition/IT">Know Information Technology</a>
                </section>
        </section>
        <section class = "cell">
            <h3>Computer Science and Technology</h3>
                <p>Articles by the MIT</p>
                <section style = "display:flex;text-align:center;align-items:center;justify-content:center">
                <a style = "color:blue" href = "https://news.mit.edu/topic/computers">Computers and Technology Articles</a>
                </section>
        </section>
        
    </section>
    <section style = "display: flex;padding:10px">
        <img src = "ai.jpg" alt = "Image of AI" style = "width: 492px;height:300px">
        <img src = "computer.jpg" alt = "Image of computer science representation" style = "width: 492px;height:300px;padding-left:5px">
        <img src = "computerlanguages.jpg" alt = "Image of different computer languages" style = "width: 492px;height:300px;padding-left:5px">

        </section>
    

    <footer class = "site-footer">
        <h3>&copy;2024 Computer Science Hub</h3>
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner3">
        <img src =  "csback.png" alt = "Image of CSS logo" class = "imgcorner4">
        </footer>
    
</body>