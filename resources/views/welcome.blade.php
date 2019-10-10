<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <ul v-for="post in posts">
                <li><strong>@{{ post.title}}</strong></li>
            </ul>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript">
            new Vue({
                el: '#app',
                data: {
                    posts: []
                },
                mounted() {
                    axios.get('/post').then(response => this.posts = response.data);
                }
            })
        </script>
    </body>
</html>
