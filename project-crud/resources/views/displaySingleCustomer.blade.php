<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Customer Details</h1>
@foreach ($data as $id =>$customer )
<h3>ID--- {{$customer->id}} <br>
Name---{{$customer->name}} <br>
City---{{$customer->city}} <br>
Product_name--{{ substr($customer->products, 0, 10) }} <br>
Product_price---{{$customer->price}} <br>
Customer_Contact_info---{{$customer->contacts}} <br>
Delivery_Task_info---{{$customer->task}} <br>
Product_Desciption---{{ $customer->description}}</h3>
Ordered created Date:  {{ $customer->created_at}} <br>
Ordered change Date:  {{ $customer->updated_at}} <br>
<a href="{{route('home')}}" class="btn btn-primary btn-sm">Back To Table</a>
@endforeach
</body>
</html>