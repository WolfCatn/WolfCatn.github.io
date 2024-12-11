<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $genres = $_POST['genres'];
    
    echo "Name: " . $name . "<br>";
    echo "Favorite Music Genres: <br>";
    if (!empty($genres)) {
        foreach ($genres as $genre) {
            echo "- " . htmlspecialchars($genre) . "<br>";
        }
    } else {
        echo "No genres selected.";
    }
} else {
    echo "Invalid request method.";
}
?>