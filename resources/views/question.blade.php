<html>
<head>
<title>multiple-choice quiz form</title>
</head>
<body bgcolor=#ffffff>

 <h5><a href="/">Log Out</a></h5>
 <h3>General Knowlodge Quiz </h3>
<form method="post" action="test_submit">
@csrf
Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.
<?php $x = 0  ?>
@foreach($question as $qus)
<P>{{++$x}}.{{$qus->question}}</p>

<input type="radio" name="Q.{{$qus->id}}" id="qus" value="{{$qus->option_1}}">{{$qus->option_1}}<BR>
<input type="radio" name="Q.{{$qus->id}}" id="qus" value="{{$qus->option_2}}">{{$qus->option_2}}<BR>
<input type="radio" name="Q.{{$qus->id}}" id="qus" value="{{$qus->option_3}}">{{$qus->option_3}}<BR>
<input type="radio" name="Q.{{$qus->id}}" id="qus" value="{{$qus->option_4}}">{{$qus->option_4}}<BR>


@endforeach



<br>
<br>
<br>
<br>
<input type="submit" value="Submit">
<input type="reset" value="Clear">
</form>

</body>
</html>