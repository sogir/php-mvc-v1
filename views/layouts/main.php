<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'My Site'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/">Home</a> | <a href="/posts">All Posts</a>
    </nav>

    <div class="container">
        {{content}}
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My MVC App</p>
    </footer>
</body>
</html>