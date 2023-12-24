@extends('layouts.master')

@section('title', 'Products')

@section('styles')
    <style>
        .fpw-container {
            display: grid;
            place-items: center;
            margin-top: 4rem;
        }

        .fpw-inner {
            width: 512px;
        }

        .bbb {
            display: flex;
            align-items: center;
            justify-content: end;
        }
    </style>
@endsection

@section('content')
    @include('partials.navbar')
    <div class="fpw-container">
        <div class="fpw-inner">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h2>Product</h2>
                        <p class="text-secondary">Edit product</p>
                    </div>
                    <form method="post" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('put')
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (session('update'))
                            <div class="alert alert-success" role="alert">
                                Successfully edited a product.
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name"
                                value="{{ $product->name }}" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" id="price"
                                value="{{ $product->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                        <div class="bbb">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#confirmDeleteModal">
                                Delete
                            </button>
                            <button type="submit" class="btn btn-primary" name="action" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this product?</p>
                    <form method="post" action="{{ route('product.destroy', $product->id) }}">
                        @csrf
                        @method('delete')
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="action" value="Delete">Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
