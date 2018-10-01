$html = <<<EOF
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> This is a test </title>
    </head>
    <body>
        <h1> Is this working? </h1>  
        <ul>
            <li> Yes </li>
            <li> No </li>
        </ul>
    </body>
</html>

EOF;

header("Content-Type: text/plain");
echo json_encode(html_to_obj($html), JSON_PRETTY_PRINT);
