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
        @include('notes.list')
        <form action="/notes" method="POST" 
            @submit.prevent="onSubmit" 
            @keydown="errors.clear($event.target.name)">

            <div class="control">
                <label for="title" class="label">Title:</label>
                <input type="text" name="title" id="title" class="input" v-model="title">
                <span class="help is-danger" 
                      v-if="errors.has('title')" 
                      v-text="errors.get('title')"></span>
                {{--  span.help:empty {dispaly: none}  --}}
            </div>
            <div class="control">
                <label for="content" class="label">Content:</label>
                <input type="text" name="content" id="content" class="input" v-model="content">
                <span class="help is-danger" 
                      v-if="errors.has('content')"
                      v-text="errors.get('content')"></span>
            </div>
            <div class="control">
                <button class="button is-primary" :disabled="errors.any()">Create</button>
            </div>
        </form>
        <a class="is-default" @click.once="test()">test</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>