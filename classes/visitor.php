<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $user_ip = $_SERVER['REMOTE_ADDR'];
$user_ip = getRealIpAddr();

$searchfor = $user_ip;
$linecount = -1;


$file = "./classes/visitors.txt";
$pattern = preg_quote($searchfor, '/');
$contents = file_get_contents($file);

$pattern = "/^.*$pattern.*\$/m";

if (preg_match_all($pattern, $contents, $matches)) {
    // counting the lines ...
    $file = "./classes/visitors.txt";
    $handle = fopen($file, "r");
    while (!feof($handle)) {
        $line = fgets($handle);
        $linecount++;
    }

    fclose($handle);
} else {
    $myfile = fopen("./classes/visitors.txt", "a") or die("Unable to open file!");
    $txt = $user_ip . "\n";
    fwrite($myfile, $txt);

    fclose($myfile);

    // counting the lines ...
    $file = "./classes/visitors.txt";
    $handle = fopen($file, "r");
    while (!feof($handle)) {
        $line = fgets($handle);
        $linecount++;
    }

    fclose($handle);
}

// echo $linecount; die;
