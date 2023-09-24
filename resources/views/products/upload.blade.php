<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload a Product</title>
</head>
<body>
    <h1>Upload a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Product Name"/>
        </div></br>
        <div>
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="Quantity"/>
        </div></br>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"/>
        </div></br>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"/
        </div></br></br>
        <div>
            <input type="submit" value="Upload a new Product"/>
        </div>
    </form>
</body>
</html>
