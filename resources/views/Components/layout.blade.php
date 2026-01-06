<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about.blade">About</a>
        <a href="/contact.blade">Contact</a>
    </nav>

     <!-- esto seria igual que lo de abajo<?php //echo $slot ?>-->

     {{ $slot }}

</body>
</html>
