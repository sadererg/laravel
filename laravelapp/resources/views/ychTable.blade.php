<!DOCTYPE html>
<html lang="en">
    <table class=tt>
<thead>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=@, initial-scale=1.0">
    <link rel="stylesheet" href="../app.css">
    <title>Таблица</title>

<h1><center>Таблица учителей </center></h1>
<tr>
    <th>id</th>
    <th>имя учителя</th>
    <th>возраст</th>
    <th>дата рождения</th>
</tr>
</thead>
<tbody>
    @foreach($posts as $post)
    <tr>
   <td>{{$post->id}}</td>
   <td>{{$post->name}}</td>
   <td>{{$post->vozrast}}</td>
   <td>{{$post->data}}</td>
</tr>
    @endforeach
</tbody>
</table>
</html>