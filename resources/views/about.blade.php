<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello,<?php echo $name?></h1>
    
    <form action="about" method="post">
    @csrf
    <input type="text" name="name" id="name"><br>
<select name="department" id="department">
    @foreach($departments as $Key => $department)

        <option value="{{$Key}}">{{$department}}</option>
        @endforeach

        <!--  <option value="2">Financial</option>
        <option value="3">Sales</option>  -->
</select>
     <br><input type="submit" value="send">
    </form>
    

</body>
</html>