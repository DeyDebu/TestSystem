<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <a href="create_question">Add Record</a>&nbsp;<a href="/">Log Out</a><br/><br/><br/>
        <table border=" ">  
            <tr>
                <td>Question No</td>
                <td>Question</td>
                <td>Correct Answer</td>
                <td>Option 1</td>
                <td>Option 2</td>
                <td>Option 3</td>
                <td>Option 4</td>
               
            </tr>
            @foreach($todoArr as $todo)
            <tr>
                <td>{{$todo->id}}</td>
                <td>{{$todo->question}}</td>
                <td>{{$todo->correct_answer}}</td>
                <td>{{$todo->option_1}}</td>
                <td>{{$todo->option_2}}</td>
                <td>{{$todo->option_3}}</td>
                <td>{{$todo->option_4}}</td>
                
                
                <td><a href="{{  url('/todo_delete',[$todo->id]) }}">Delete</a></td>
                <td><a href="{{  url('/todo_edit',[$todo->id]) }}">Edit</a></td>
                
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>