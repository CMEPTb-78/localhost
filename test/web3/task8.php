<?php
function animateBackground($speed) {
    $duration = 10 / $speed; 
    echo "
    <style>
        @keyframes colorChange {
            0% { background-color: red; }
            25% { background-color: blue; }
            50% { background-color: green; }
            75% { background-color: yellow; }
            100% { background-color: red; }
        }
        body { animation: colorChange {$duration}s infinite linear; }
    </style>
    <p>Скорость изменения: $speed</p>";
}

animateBackground(2);
?>