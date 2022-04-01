<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <?php wp_header();?> <!-- a hook that plugins can use to add their javascript -->
</head>

<body <?php body_class();?>> <!-- php body class that allows wordpress to add its own classes to the body -->