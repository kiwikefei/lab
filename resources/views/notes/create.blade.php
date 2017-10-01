<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note form submmit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.css" />
    <style>
        body {
            padding-top: 40px;
        }
        .control {
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div id="app" class="container">
            <form action="/notes" method="POST">
                <div class="control">
                    <label for="title" class="label">Title:</label>
                    <input type="text" name="title" id="title" class="input">
                </div>
                <div class="control">
                    <label for="content" class="label">Content:</label>
                    <input type="text" name="content" id="content" class="input">
                </div>
                <div class="control">
                    <button class="button is-primary">Create</button>
                </div>
            </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>