<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="todo_show">Back</a><br/><br/>
    {{session('msg')}}<br/>
    <form method="post" action="{{  url('/todo_submit') }}" >
        @csrf
        <table id="customers">
            <tr>
                <td>Question No</td>
                <td><input type="text" name="question_no" required value="{{$todoArr->id}}"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td><input type="text" name="question" required value="{{$todoArr->question}}"/></td>
            </tr>
            <tr>
                <td>Correct Answer</td>
                <td><input type="text" name="correct_answer" required value="{{$todoArr->correct_answer}}"/></td>
            </tr>
            <tr>
                <td>Option 1</td>
                <td><input type="text" name="option_1" required value="{{$todoArr->option_1}}"/></td>
            </tr>
            <tr>
                <td>Option 2</td>   
                <td><input type="text" name="option_2" required value="{{$todoArr->option_2}}"/></td>
            </tr>
            <tr>
                <td>Option 3</td>
                <td><input type="text" name="option_3" required value="{{$todoArr->option_3}}"/></td>
            </tr>
            <tr>
                <td>Option 4</td>
                <td><input type="text" name="option_4" required value="{{$todoArr->option_4}}"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"/></td>
            </tr>
        </table>
    </form>
</body>
</html>