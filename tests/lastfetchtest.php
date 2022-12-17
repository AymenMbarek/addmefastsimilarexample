<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JS getAttribute() Demo</title>
</head>
<body>

    <a href="https://www.javascripttutorial.net" 
        target="_blank" 
        id="js">JavaScript Tutorial
    </a>

    <script>
        let link = document.querySelector('#js');
        if (link) {
            let target = link.getAttribute('target');
            
            console.log(target);
            document.write(target);
        }
    </script>
</body>
</html>