@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="row col-md-12 col lg-12 col-sm-12" style="background: white; margin: 10px;">   
      <h1>Dashboard</h1></a>
</div>
<div class="row col-md-12 col lg-12 col-sm-12" style="background: white; padding-left: 600px; margin-vertical: 200px">
    <nav class="navbar navbar-default">
         <ul>
            <div class="navbar-brand"><h1>Menu</h1></div>
            
           <!-- <li><a class="navbar-brand" href="{{url('/customer')}}">Create Customer</a></li> -->
           <li><a class="navbar-brand" href="{{route('customer')}}">Create Customer</a></li>
           <li><a class="navbar-brand" href="{{route('product')}}">Create Product</a></li>
           <!-- <li><a class="navbar-brand" href="#">Create Product</a></li> -->
           <li><a class="navbar-brand" href="#">Create Invoice</a></li>
           <li><a class="navbar-brand" href="{{url('/view-invoice')}}">View Invoice</a></li>
         </ul>
    </nav>
</div>
    
</body>
</html>

<!-- make menu item dynamic and link to a  -->
 @endsection


