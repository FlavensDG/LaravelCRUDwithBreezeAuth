<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Product</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('products.update', ['product' => $product])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Product Name" value="{{$product->name}}"/>
        </div></br>
        <div>
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="Quantity" value="{{$product->quantity}}">
        </div></br>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div></br>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"value="{{$product->description}}">
        </div></br></br>
        <div>
            <input type="submit" value="Edit Product Details"/>
        </div>
    </form>
</body>
</html>
