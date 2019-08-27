@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>
</head>
<body>
<div style="margin-top: 100px; margin-left: 500px; font-size:30px">
    <form action="/insertCustomer" method="post">
        <table>
            <tr>
                {{csrf_field()}}
                <td>Customer Name :</td>
                <td><input type="text" name="customerName"></td>
            </tr>
            <tr>
                <td>Address :</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email"></td>
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