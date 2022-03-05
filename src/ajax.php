<?php session_start();
session_destroy(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function() {
            $('button').click(function() {
                $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts',
                    type: 'post',
                    dataType: 'json',
                    success:function(data) {
                        $.each(data, function(key,value) {
                              $('#display').append(value.userId + '<br>' + value.id + '<br>' + value.title + '<br>' + value.body);
                        })
                    },
                    error:function(data) {
                        console.log('fail');
                    }
                });
            });
        });
    </script>
</head>
<body>
<div>
    <h1>press the button</h1>
    <button>press me</button>
</div>

<div id="display"></div>
</body>
</html>