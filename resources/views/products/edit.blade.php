<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.update', $product->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h6">Name</label>
                                <input type="text" value="{{ old('name',$product->name)}}" class=" @error('name') is-invalid @enderror form-control form-control-md" placeholder="Name" name="name">
                                @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h6">Sku</label>
                                <input type="text" value="{{ old('sku', $product->sku)}}" class="@error('sku') is-invalid @enderror form-control form-control-md" placeholder="Sku" name="sku">
                                @error('sku')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h6">Price</label>
                                <input type="text" value="{{ old('price', $product->price)}}" class="@error('price') is-invalid @enderror form-control form-control-md" placeholder="Price" name="price">
                                @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h6">Description</label>
                                <textarea class="form-control form-control-md" cols="30" rows="5" placeholder="Description" name="description">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h6">Image</label>
                                <input type="file" class="form-control form-control-md" name="image">
                                @if ($product->image != "")
                                <img src="{{ asset('uploads/products/' . $product->image) }}" alt="" width="50%" height="50%" class="rounded my-3">
                                @endif
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-md btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>