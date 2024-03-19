<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Posts</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
    <!--Create a html form in the posts view with the ability to send a new post to the
backend.
i. a post should have a name and a description at a minimum. -->
    <h1>Post Views</h1>
    <button id="fetch">
        fetch from backend
    </button>
    <div id="posts-container"></div>
    <h3 style ="margin-top: 50px">create a post</h3>
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

    <div id="data-container"></div>

<script>
$(document).ready(function(){
    $("#fetch-db").click(function (){
        $.ajax({
            url: 'https://localhost.8888/posts'
            type: "GET",
            dataType: "json",
            success: function (data){
                console.log(data)
                $('#posts-container').html('')
                $.each(data, function(key,value){
                    console.log(value)
                    $('#posts-container').append(`
                   <p>${value['id']} ${value['name']}</p>`)
                });
            }
        });
    })

    $('form-id').on('submit',
        function (e) {
            e.preventDefault();
            var name = $('#name-input').val();
            var description = $('#desc-input').val();
            const data =
                {
                    name: name,
                    description: description,
                }
            $.ajax({
                url: 'http://localhost:8888/posts',
                type: "POST",
                data: data,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $('#name-input').val('')
                    $('#desc-input').val('')
                    $('#data-container').html
                            `
                                <div>
                                    <p>${data.name}</p>
                                    <p>${data.description}</p>
                                </div>`
                });

</script>
</body>
</html>