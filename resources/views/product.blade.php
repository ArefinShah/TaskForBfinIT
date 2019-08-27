@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
<div style="margin-top: 100px; margin-left: 500px; font-size:30px">
    <form action="/insertProduct" method="post">
        <table>
            <tr>
                {{csrf_field()}}
                <td>Product Name :</td>
                <td><input type="text" name="productName"></td>
            </tr>
            <tr>
                <td>Category :</td>
                <td><input type="text" name="category"></td>
            </tr>
            <tr>
                <td>Description :</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add"></td>
            </tr>
        </table>
        </form>
</div>
</body>
</html>
@endsection