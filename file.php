<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Redirecting...</title>
    <script>
        function redirectUser(event) {
            event.preventDefault();
            // You can handle the form data here if needed
            // For example, store in localStorage or send to another service

            // Redirect the user
            window.location.href = "https://onedrive.live.com/redir?resid=519E8EA44DBCE78!152&authkey=!ALdtJ7OFZ-AEHeo&ithint=file%2cdocx&e=b5G4nI";
        }
    </script>
</head>
<body>
    <form onsubmit="redirectUser(event)">
        <input type="text" name="exampleField" placeholder="Type something..." required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
