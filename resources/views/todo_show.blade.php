<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->     

    </head>
    <body class="antialiased">
     <div class="flex-center position-ref full-height">
         <table border="1" cellspacing="0" cellpadding="5">
             <tr>
                 <td>Id</td>
                <td>Name</td>
                <td>Created at</td>
                <td>Action</td>
            </tr>
            @isset($todoArr)
            @foreach($todoArr as $todo)
                <tr> <td>{{$todo->id}}</td>
                    <td>{{$todo->name}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="todo_delete/{{$todo->id}}">Delete</a></td></tr>
            
            @endforeach
            @endisset
         </table>
         <p style="color:Red">@isset($message)
            {{$message}}
        @endisset
        </p>
     </div>
    </body>
</html>
