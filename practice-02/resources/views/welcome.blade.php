<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>upload form</title>
</head>
<body>
  <h1>{{__('welcome.uploadFile')}}</h1>
  <h2>{{__('welcome.greeting',['name'=>'ayan'])}}</h2>
  <h1>set language</h1>
  <a href="/setlang/en">english</a>
  <br>
  <a href="/setlang/urdu">urdu</a>
  <br>
  <br>
  <br>
      <form action="home" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <br>
        <br>
        <button type="submit">submit</button>
      </form>
</body>
</html>