<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        @csrf
        <label for="user_id">user_id</label>
        <input type="number" name="user_id" id="user_id" value="{{ old('user_id') }}">

        <label for="body">body</label>
        <textarea type="text" name="body" id="body" value="{{ old('body') }}"></textarea>

        <label for="points">points</label>
        <input type="number" name="points" id="points" value="{{ old('points') }}">

        <label for="comment_count">comment_count</label>
        <input type="text" name="comment_count" id="comment_count" value="{{ old('comment_count') }}">

        <button type="submit">odeslat</button>
    </form>
</body>

</html>
