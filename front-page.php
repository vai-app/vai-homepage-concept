<?php
$static_home = __DIR__ . '/index.html';

if (is_readable($static_home)) {
    readfile($static_home);
    return;
}

status_header(500);
echo 'Missing index.html in theme folder.';

