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
    <form method="post" action="{{  url('/todo_submit') }}">
        @csrf
        <table id="customers">
            <tr>
                <td>Question No</td>
                <td><input type="textname" name="question_no" required/></td>
                <td>Question</td>
                <td><input type="textname" name="question" required/></td>
                <td>correct answer</td>
                <td><input type="textname" name="correct_answer" required/></td>
                <td>option 1</td>
                <td><input type="textname" name="option_1" required/></td>
                <td>option 2</td>
                <td><input type="textname" name="option_2" required/></td>
                <td>option 3</td>
                <td><input type="textname" name="option_3" required/></td>
                <td>option 4</td>
                <td><input type="textname" name="option_4" required/></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"/></td>
            </tr>
        </table>
    </form>
</body>
</html>