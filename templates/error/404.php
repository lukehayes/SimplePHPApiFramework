<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404.</title>
    <link rel="stylesheet" href="assets/simplecss.css">
</head>
<body>

{% block content %}

<style>
.error
{
    margin: 0 auto;
    text-align: center;
}

.error h1
{
    font-size: 250px !important;
}
</style>
<div class="error" >
    <h1>404</h1>
    <p>Oops, something went wrong.</p>
</div>
{% endblock %}

</body>
</html>
