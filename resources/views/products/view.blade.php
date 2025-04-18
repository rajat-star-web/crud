<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Opration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3 text-center">
        <h4 class="text-white fw-bold ">CRUD OPRATION</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 d-flex justify-content-end pt-4">
                <a href="{{ route('products.index') }}" class="btn btn-dark rounded">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">View Product</h3>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="col-md-10 pt-4">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                @if ($product->image != "")
                                <img src="{{ asset('uploads/products/' . $product->image) }}" alt="" class="rounded img-fluid" >
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Product Name: - </strong> {{ $product->name }}</p>
                                <p><strong>Product SKU: - </strong> {{ $product->sku }}</p>
                                <p><strong>Product Price :- </strong> {{ $product->price }}</p>
                                <p><strong>Product Description :- </strong> {{ $product->description }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>