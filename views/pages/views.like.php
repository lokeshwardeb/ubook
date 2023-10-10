<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Like Buttons</title>
    <style>
        .like-button {
            background-color: #ccc;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .liked {
            background-color: #ff5733;
        }
    </style>
</head>
<body>
    <ul>
        <li>
            <span>Item 1</span>
            <button class="like-button">Like</button>
            <p class="like-count">0 Likes</p>
        </li>
        <li>
            <span>Item 2</span>
            <button class="like-button">Like</button>
            <p class="like-count">0 Likes</p>
        </li>
        <!-- Add more items as needed -->
    </ul>

    <script>
        // JavaScript code to handle multiple like buttons
        const likeButtons = document.querySelectorAll(".like-button");

        likeButtons.forEach((button) => {
            let likeCount = 0;
            const likeCountDisplay = button.nextElementSibling; // Get the sibling <p> element

            button.addEventListener("click", function () {
                likeCount++;
                likeCountDisplay.textContent = likeCount + (likeCount === 1 ? " Like" : " Likes");
                button.classList.add("liked");
                button.disabled = true;
            });
        });
    </script>
</body>
</html>
