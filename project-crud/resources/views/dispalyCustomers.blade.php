<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>KBM Mobile Accossories</title>
</head>
<body>
   
    <div class="container"><br>
        <div ><a href="/addnew" class="btn btn-success btn-sm"> + Add Sale</a><br>
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Contact</th>
                        <th>Task</th>
                        <th>Description</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $id =>$customer )
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}} </td>
                            <td>{{$customer->city}}</td>
                            <td>{{ substr($customer->products, 0, 10) }}...</td>
                            <td>{{$customer->price}}$</td>
                            <td>{{$customer->contacts}}</td>
                            <td>{{$customer->task}}</td>
                            <td style="font-size: 10px;">{{ $customer->description}}...</td>
                            <td><a href="{{route('view.customer',$customer->id)}}" class="btn btn-primary btn-sm">view</a></td>
                            <td><a href="{{route('delete.customer',$customer->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{route('viewpass.customer',$customer->id)}}" class="btn btn-secondary btn-sm">Update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="md-5">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>


