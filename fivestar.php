<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rating = $_POST['rating'];
    echo "You rated: $rating stars";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Five Star Rating</title>
    <style>
        .star { font-size: 30px; cursor: pointer; color: grey; }
        .star.selected, .star:hover { color: gold; }
    </style>
</head>
<body>

<h2>Rate this product:</h2>

<form method="POST">
    <div id="stars">
        <span class="star" data-value="1">&#9733;</span>
        <span class="star" data-value="2">&#9733;</span>
        <span class="star" data-value="3">&#9733;</span>
        <span class="star" data-value="4">&#9733;</span>
        <span class="star" data-value="5">&#9733;</span>
    </div>
    <input type="hidden" name="rating" id="rating" value="0">
    <button type="submit">Submit Rating</button>
</form>

<script>
    // Simple star rating system
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', () => {
            const rating = star.getAttribute('data-value');
            document.getElementById('rating').value = rating;
            document.querySelectorAll('.star').forEach(s => s.classList.remove('selected'));
            for (let i = 0; i < rating; i++) document.querySelectorAll('.star')[i].classList.add('selected');
        });
    });
</script>

</body>
</html>
