<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://glitch.com/favicon.ico" />
    <title>Run Network Tools</title>
    <link rel="stylesheet" href="/style.css" />
    <script src="/script.js" defer></script>
  </head>
  <body>
    <h1>Run Network Tools</h1>
    <h2>Apply netstat to the following</h2>
    <form method="POST" action="result.php">
      <label for="ip_address">IP address:</label>
      <input 
        type="text" 
        id="ip_address" 
        name="ip_address" 
        placeholder="Example: 172.17.0.81" 
        required 
      />
      <input type="submit" value="View History" />
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ip_address = htmlspecialchars($_POST['ip_address']);
        echo "<h3>Network activity for IP: $ip_address</h3>";
    }
    ?>
  </body>
</html>
