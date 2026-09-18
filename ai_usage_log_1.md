# AI Usage Log

**Platform:** Claude.ai (web/mobile chat interface)
**Model:** Claude Sonnet 5

---

## Interaction 1

### User

Title) EECS348 Lab Three
Description paragraph below title) Welcome to the my lab 3 index page. Follow the links to find practices 1-4.

Make buttons that able to be pressed to take you to each of the practices.
Make a dark theme for this page.
Make the background of the page a blurred gif that I am able to choose.

<html>

<head>
    <h1>EECS 348 Lab Three</h1>
</head>

<body>
    Hello! This is the index of my Lab 3<br>

    Please follow these links to visit other practices.<br>
    <a href="practice1.html">Practice1</a> <br>
    <a href="practice2.html">Practice2</a> <br>
    <a href="practice3.html">Practice3</a> <br>
    <a href="practice4.php">Practice4</a> <br>
</body>

</html>

### Assistant Summary

Reviewed frontend-design guidance, then rebuilt the index page as a dark-themed "terminal window" layout with a title bar, monospace/sans type, and amber/teal accents. Converted the plain links into styled clickable button rows for Practice 1–4. Added a file-input control that let the user select a local image, applying it as a blurred, dimmed full-page background via a separate fixed layer and JavaScript `URL.createObjectURL`. Created and delivered the file as `index.html`, noting that the chosen background would not persist across reloads.

---

## Interaction 2

### User

scrap the blurred gif idea. Keep the dark themed and use the windows powershell default font.

### Assistant Summary

Removed the background-image picker feature entirely (deleted the associated HTML, CSS, and JavaScript). Changed the page's font stack to Consolas (with Cascadia Mono and Courier New as fallbacks), matching Windows PowerShell's default font, and applied it across the whole page. Cleaned up leftover CSS references to the removed background layer and an undefined font variable, then re-delivered the updated `index.html`.

---

## Interaction 3

### User

Modify the code for this page to match the theme for main page.

<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hi, I'm Brayden Nelson</h1>
    <p>I'm a Computer Engineering student at the University of Kansas, currently taking EECS 348: Software Engineering I. This is my profile page for Lab 3>

    <h2>PGE: Him.</h2>
    <img src="pictures/pge4.jpg" alt="My photo" width="300">
    <p>test case</p>

    <h2>Check Out his Wiki!</h2>
    <p>Learn about his accolades, story, and why he's the goat <a href="https://liquipedia.net/overwatch/PGE" target="_blank">Click me!</a></p>

    <h2>Want to watch the best video ever produced??</h2>
    <iframe width="560" height="315"
        src="https://www.youtube.com/embed/SE1Z1-rJoB4?start=75"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>

    <p><a href="index.html">Back to home</a></p>
</body>
</html>

### Assistant Summary

Rebuilt the profile page using the same terminal-card theme as the index page (dark palette, Consolas font, title-bar dots, amber/teal accents), inlining the CSS directly since the referenced external `style.css` was not available. Fixed a broken `<p>` tag in the original markup that was missing its closing punctuation and tag. Kept the existing image, wiki link, and video embed, restyling them to fit the theme, and restyled the "Back to home" link as a button matching the index page's practice links. Delivered the result as `profile.html`.

---

## Interaction 4

### User

Follow the same instructions for theme on this page.

<!DOCTYPE html>
<html>
<head>
    <title>CSS Font Control</title>
    <style>
        #myParagraph {
            border-style: solid;
            border-width: 2px;
            padding: 10px;
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>CSS Font Control</h1>

    <p id="myParagraph">
        Change the color and border width below!
        ==================================
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
        Cheese Cheese Cheese Cheese Cheese Cheese
    </p>

    <label>RGB Color (e.g. 255,0,0): </label>
    <input type="text" id="rgbInput" placeholder="255,0,0"><br><br>

    <label>Border Width (px): </label>
    <input type="text" id="widthInput" placeholder="2"><br><br>

    <button onclick="updateStyle()">Apply</button>

    <script>
        function updateStyle() {
            var rgb = document.getElementById("rgbInput").value;            var width = document.getElementById("widthInput").value;
            var para = document.getElementById("myParagraph");

            if (rgb.trim() !== "") {
                para.style.color = "rgb(" + rgb + ")";
                para.style.borderColor = "rgb(" + rgb + ")";
            }
            if (width.trim() !== "") {
                para.style.borderWidth = width + "px";
            }
        }
    </script>

    <p><a href="index.html">Back to home</a></p>
</body>
</html>

### Assistant Summary

Applied the same terminal-card theme (dark palette, Consolas font, amber/teal accents) to the CSS Font Control page, restyling the paragraph box, the two text inputs, and the Apply button, and restyling the "Back to home" link as a themed button. Left the `updateStyle()` JavaScript function unchanged, so it still updates the paragraph's text color, border color, and border width based on the user's input. Delivered the result as `font-control.html` and noted that entering a custom RGB value would override the theme's default text/border color by design.

---

## Interaction 5

### User

Same instructions for theme on this page.

<!DOCTYPE html>
<html>
<head>
    <title>Password Verification</title>
</head>
<body>
    <h1>Password Verification</h1>

    <label>Enter Password: </label>
    <input type="password" id="pass1"><br><br>

    <label>Confirm Password: </label>
    <input type="password" id="pass2"><br><br>

    <button onclick="checkPasswords()">Verify</button>

    <script>
        function checkPasswords() {
            var p1 = document.getElementById("pass1").value;
            var p2 = document.getElementById("pass2").value;

            if (p1.length < 8) {
                alert("Password must be at least 8 characters long.");
            } else if (p1 !== p2) {
                alert("Passwords do not match.");
            } else {
                alert("Passwords matched!");
            }
        }
    </script>

    <p><a href="index.html">Back to home</a></p>
</body>
</html>

### Assistant Summary

Applied the same terminal-card theme to the Password Verification page, restyling the two password inputs and the Verify button, and restyling the "Back to home" link as a themed button. Left the `checkPasswords()` JavaScript function unchanged, so it still validates password length, checks that both fields match, and shows the same three alert messages. Delivered the result as `password-verification.html`.

---

## Interaction 6

### User

Same instructions for theme on this page.

<!DOCTYPE html>
<html>
<head>
    <title>PHP Multiplication Table</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
    </style>
</head>
<body>
    <h1>PHP Multiplication Table</h1>

    <form method="GET" action="practice4.php">
        <label>Enter a number: </label>
        <input type="text" name="num">
        <input type="submit" value="Generate">
    </form>

    <?php
    if (isset($_GET['num']) && $_GET['num'] !== "") {
        $n = intval($_GET['num']);

        if ($n > 0) {
            echo "<table>";
            // header row
            echo "<tr><th>x</th>";
            for ($col = 1; $col <= $n; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";

            for ($row = 1; $row <= $n; $row++) {
                echo "<tr><th>$row</th>";
                for ($col = 1; $col <= $n; $col++) {
                    $product = $row * $col;
                    echo "<td>$product</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a positive number.</p>";
        }
    }
    ?>

    <p><a href="index.html">Back to home</a></p>
</body>
</html>

### Assistant Summary

Applied the same terminal-card theme to the PHP Multiplication Table page, restyling the form inputs, submit button, and the generated table (amber header cells, themed borders and text colors), and restyling the "Back to home" link as a themed button. Left the PHP logic controlling table generation from `$_GET['num']` unchanged. Added `overflow-x: auto` and a `max-width` constraint on the table so that large tables would scroll horizontally within the card rather than breaking the layout. Delivered the result as `practice4.php`.

---

## Interaction 7

### User

in practice4.php if the number entered is larger than 13 the window doesnt resize and a scroll bar shows up. Allow the window to become larger dependent on the size of the table.

### Assistant Summary

Identified that the fixed `640px` max-width on the terminal card, combined with `overflow-x: auto` on the table, was forcing a horizontal scrollbar instead of letting the container grow. Changed the terminal card's width to `fit-content` with a `min-width` of 300px and a `max-width` of 95vw, and removed the table's forced overflow/scroll styling, so the card now expands to fit larger tables (up to 95% of the viewport width) instead of scrolling within a fixed-width box. Noted that a browser window itself cannot be resized by a script, so extremely wide tables exceeding 95vw would still cause the page to scroll. Delivered the updated `practice4.php`.

---

## Interaction 8

### User

[Uploaded file: AI_USAGE_LOG_INSTRUCTIONS-1.md]

### Assistant Summary

Generated and delivered this AI usage log, `ai_usage_log.md`, documenting the conversation history available up to this point.
