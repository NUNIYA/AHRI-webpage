<?php
function displayContent($contentAvailable = false) {
    if ($contentAvailable) {
        // Code to fetch and display actual content goes here
        echo "<h1>Our Latest Content</h1>";
        echo "<p>Here you will find all our latest updates.</p>";
    } else {
        // Display "Coming Soon" message
        echo "<h1>Coming Soon</h1>";
    }
}
