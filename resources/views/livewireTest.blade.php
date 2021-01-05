<html>
<head>
    @livewireStyles
</head>
<body>
<h1>Posts</h1>
<hr>
    @livewire('show-posts')
    @livewire('show-post', ['post' => $post])

    @livewireScripts
</body>
</html>

