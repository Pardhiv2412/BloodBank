<!DOCTYPE html>
<html>
<head>
    <title>Toggle Button Example</title>
    <style>
        /* CSS for the toggle button */
        .toggle-button {
            background-color: #f1f1f1;
            border: none;
            color: #000;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="frame-content">
        <!-- Default content of the frame -->
        <iframe id="page-frame" src="selectdonor.php"></iframe>
        <a class="toggle-button" onclick="togglePage()">Toggle</a>
    </div>

    <!-- Script to toggle between the two pages -->
    <script>
        function togglePage() {
            var frame = document.getElementById('page-frame');
            var currentSrc = frame.getAttribute('src');
            
            if (currentSrc === 'selectdonor.php') {
                // Switch to selectneed.php
                frame.setAttribute('src', 'selectneed.php');
            } else {
                // Switch to selectdonor.php
                frame.setAttribute('src', 'selectdonor.php');
            }
        }
    </script>
</body>
</html>
