<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test - copy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   
    <input id="foo" type="text" value="hello">
	
    <button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copy</button>
	
	<button class="btn2" data-clipboard-text="hi5">Copy to clipboard</button>
    <script src="clipboard.min.js"></script>
    <script>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
	
	
	var clipboard2 = new Clipboard('.btn2');

    clipboard2.on('success', function(e) {
        console.log(e);
    });

    clipboard2.on('error', function(e) {
        console.log(e);
    });
    </script>
</body>
</html>
