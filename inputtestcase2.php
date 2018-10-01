$html = <<<EOF
        <script type="text/javascript">
            alert('hi');
        </script>
EOF;

header("Content-Type: text/plain");
echo json_encode(html_to_obj($html), JSON_PRETTY_PRINT);
