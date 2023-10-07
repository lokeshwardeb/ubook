<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style>
        /* Define the sidebar's width and style */
.sidebar {
    width: 250px;
    background-color: #f0f0f0;
    padding: 20px;
    /* Set a fixed height and hide overflow initially */
    height: 100px; /* Adjust as needed */
    overflow: hidden;
    transition: height 0.3s ease-in-out;
}

/* Enable scrollbar when hovering */
.sidebar:hover {
    /* Add a maximum height to enable the scrollbar */
    max-height: 400px; /* Adjust as needed */
    /* Set overflow-y to auto to show the scrollbar */
    overflow-y: auto;
}

/* Style for sidebar items (optional) */
.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    margin: 5px 0;
    padding: 10px;
    background-color: #ccc;
    border-radius: 5px;
}

/* Optional: Hover effect for sidebar items */
.sidebar li:hover {
    background-color: #ddd;
}

    </style>

</head>
<body>
    <div class="sidebar">
        <!-- Your sidebar content goes here -->
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <!-- Add more items as needed -->
        </ul>
    </div>
</body>
</html>
