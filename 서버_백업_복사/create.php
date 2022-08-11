<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
    <style>
        body{
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: green;
        }
        .wrapper{
            font-family: system-ui, serif;
            padding: 1rem;
            border-radius: 1rem;
            background: white;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
        <form action="create_process.php" method="post">
            <h2>제목</h2>
            <p>
                <input type="text" name="title" placeholder="Title">
            </p>
            <h2>내용</h2>
            <p>
                <textarea name="description" placeholder="Description" cols=100% rows=100%></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </div>
  </body>
</html>
