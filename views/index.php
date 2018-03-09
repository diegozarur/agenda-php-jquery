<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=number], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>

<h3>Contact Form</h3>


<div class="container">
    <form method="post">
        <label for="fname"> Name</label>
        <input type="text" id="nome" name="nome" placeholder="Your name..">

        <label for="preco">Preço</label>
        <input type="number" id="preco" name="preco">

        <label for="descricao">Subject</label>
        <textarea id="descricao" name="descricao" placeholder="Write something.." style="height:200px"></textarea>
        <input type="hidden" name="action" value="adiciona">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
