<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<script>
    {{--  function addScript(src){
        var script = document.createElement("script");
        script.setAttribute("type", "text/javascript");
        script.src = src;
        document.body.appendChild(script);
    }
    window.onload = function() {
        //add jsonp call endpoint with a callback
        console.log('jsonp call initialized.');
        addScript('http://jsonp.dev/get?callback=foo');
    }
    function foo(data) {
        console.log('Your ip address is :' + data.ip);
    }  --}}
    function addScriptTag(src) {
        var script = document.createElement('script');
        script.setAttribute("type","text/javascript");
        script.src = src;
        document.body.appendChild(script);
    }

    window.onload = function () {
        addScriptTag('http://jsonp.dev/get?callback=foo');
    }

    function foo(data) {
        console.log('Your public IP address is: ' + data.ip);
    };
</script>
</body>
</html>