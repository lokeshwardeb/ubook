<!DOCTYPE html>
<html>
<head>
    <title>Copy Link to Clipboard</title>
</head>
<body>
    <input type="text" value="https://example.com" id="linkToCopy">
    <button onclick="copyToClipboard()">Copy Link</button>

    <script>
        function copyToClipboard() {
            // Get the input element with the link
            var linkInput = document.getElementById('linkToCopy');

            // Select the text in the input field
            linkInput.select();
            linkInput.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text to the clipboard
            document.execCommand('copy');

            // Deselect the input field
            linkInput.setSelectionRange(0, 0);

            // Provide user feedback (optional)
            alert('Link copied to clipboard: ' + linkInput.value);
        }
    </script>
</body>
</html>
