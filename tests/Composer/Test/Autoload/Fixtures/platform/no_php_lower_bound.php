<?php

// platform_check.php @generated by Composer

$issues = array();

if (!(PHP_VERSION_ID >= 0 && PHP_VERSION_ID < 80000)) {
    $issues[] = 'Your Composer dependencies require a PHP version ">= 0" and "< 8.0.0". You are running ' . PHP_VERSION  .  '.';
}

if ($issues) {
    echo 'Composer detected issues in your platform:' . "\n\n" . implode("\n", $issues);
    exit(104);
}
