<!DOCTYPE html>
<html>
<head>
    <title>Products PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">IMAGE</th>
                <th scope="col">TITLE</th>
                <th scope="col">PRICE</th>
                <th scope="col">STOCK</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="text-center">
                        <img src="{{ public_path('storage/products/'.$product->image) }}" class="rounded" style="width: 100px">
                    </td>
                    <td>{{ $product->title }}</td>
                    <td>{{ "Rp " . number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
