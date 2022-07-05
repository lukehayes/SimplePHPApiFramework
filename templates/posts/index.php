{% extends "main/base.php" %}

{% block content %}
<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
    </tr>
<tbody>
{% for row in data%}
    <tr>
        <td>{{row.id}}</td>
        <td>{{row.title}}</td>
    </tr>
{% endfor %}

{% endblock %}
