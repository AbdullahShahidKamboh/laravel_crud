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
    <div class="container">
        <h2>+Add Purchase</h2>
        <div class="row">
            <div class="col-4">
                <form action="{{route('update.customer')}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        @foreach ($data as $id =>$customer )
                        <lable class="form-lable">Name</lable>
                        <input type="text" value="{{$customer->name}}" class="form-control @error('cus_name') is-invalid @enderror " name="cus_name">
                        <input type="text" value="{{$customer->id}}"  name="cus_id" hidden>
                        <span class="text-danger">
                            @error('cus_name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <lable class="form-lable">City</lable>
                        <input type="text" value="{{$customer->city}}" class="form-control   @error('cus_city') is-invalid @enderror" name="cus_city">
                        <span class="text-danger">
                            @error('cus_city')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <lable class="form-lable">Product</lable>
                        <input type="text" value="{{$customer->products}}" class="form-control @error('cus_product')is-invalid @enderror" name="cus_product">
                        <span class="text-danger">
                            @error('cus_product')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <lable class="form-lable">Price</lable>
                        <input type="text" value="{{$customer->price}}" class="form-control  @error('cus_price') is-invalid @enderror" name="cus_price">
                        <span class="text-danger">
                            @error('cus_price')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <lable class="form-lable">Description</lable>
                        <input type="text" value="{{$customer->description}}" class="form-control @error('cus_discription') is-invalid @enderror" name="cus_discription">
                        <span class="text-danger">
                            @error('cus_discription')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <lable class="form-lable">Contact</lable>
                        <input type="number" value="{{$customer->contacts}}" class="form-control @error('cus_contact') is-invalid @enderror" name="cus_contact">
                        <span class="text-danger">
                            @error('cus_contact')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Purchase</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>