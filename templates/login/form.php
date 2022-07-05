{% extends "main/base.php" %}

{% block content %}

<h5>Login</h5>

<form action="/login" method="POST">
    <input type="text" placeholder="username">
    <input type="text" placeholder="password">
    <input type="submit" value="Send">
</form>

{% endblock %}
