<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Posts</title>
    </head>
    <body>
    <!--Create a html form in the posts view with the ability to send a new post to the
backend.
i. a post should have a name and a description at a minimum. -->
    <h1>Post Views</h1>
    <button id="fetch">
        fetch from backend
    </button>
    <form id="form-id">
        <div style="margin: 20px 0">
            <label>name</label>
            <input type="text" id='name-input' name="name">
        <br>
            <label>description</label>
            <input type="text" id='desc-input' name="description">
        <br>
        <div style="margin: 20px 0">
            <input type="submit" value="submit">
            <br/>
        </div>
    </form


    {% for key, value in posts %}
        id: {{value.id}}
        title: {{value.title}}
        views: {{value.views}}
        <br>
        {% endfor %}
    </body>
</html>