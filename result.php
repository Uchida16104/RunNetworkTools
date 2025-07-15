<?php
$ip_address = $_POST['ip_address'] ?? '';

if (!empty($ip_address)) {
    $cmd_ping = "ping -c 4 \"$ip_address\"";
    $ping_result = shell_exec($cmd_ping);
  
    $cmd_netstat = "netstat -an | grep -E '($ip_address|::ffff:$ip_address)'";
    $netstat_result = shell_exec($cmd_netstat);

    $cmd_log = "logshow --predicate 'eventMessage contains \"$ip_address\"' --info";
    $log_result = shell_exec($cmd_log);
  
    echo "<h3>Ping Connection: ($ip_address)</h3>";
    echo "<pre>$ping_result</pre>";
    
    echo "<h3>Network Connection History: ($ip_address)</h3>";
    echo "<pre>$netstat_result</pre>";

    echo "<h3>Event History: ($ip_address)</h3>";
    echo "<pre>$log_result</pre>";
} else {
    $your_ip = file_get_contents('https://api.ipify.org');
    preg_match('/inet (\d+\.\d+\.\d+\.\d+)/', $your_ip, $matches);
    
    if (isset($matches[1])) {
        $your_ip = $matches[1];
        echo "<h3>Your IPv4 Address: " . $your_ip . "</h3>";
    } else {
        echo "<h3>IPv4 Address not found.</h3>";
    }
}

$link_text = "Return to IP address input form";
echo '<br><button onclick="location.href=\'index.php\'">' . $link_text . '</button>';
?>
