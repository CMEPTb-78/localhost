<?php
function animateBackground($speed) {
    // Чем выше speed, тем короче длительность анимации
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

// Вызов с параметром скорости (например, 2)
animateBackground(2);
?>