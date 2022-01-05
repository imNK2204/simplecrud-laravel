<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <title>Add Product</title>
</head>
<body>
    <div class="container col-6">
        <h1 class="mt-2">Add Product</h1>
        <hr>
        <form action="{{route('createproduct')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="product name">Product Name</label>
                <input type="text" name="pname" class="form-control" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="product name">Product Description</label>
                <input type="text" name="pdesc" class="form-control" placeholder="Enter Product Description">
            </div>
            <div class="form-group">
                <label for="product name">Product Qty</label>
                <input type="text" name="pqty" class="form-control" placeholder="Enter Product Qty">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit">Add Product</button>
            </div>
        </form>
    </div>
</body>
</html>