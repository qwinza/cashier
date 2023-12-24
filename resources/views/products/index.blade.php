@extends('layouts.master')

@section('title', 'Products')

@section('content')
    {{-- @php
        $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
    @endphp --}}
    @include('partials.navbar')
    <div class="p-4">
        <h1>Products</h1>
    </div>
    @if (auth()->user()->role === 'management')
        <div class="px-4">
            <a class="btn btn-primary" href="{{ route('product.create') }}">Add product</a>
        </div>
    @endif
    <div class="p-4">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="p-4">
        @if (session('delete'))
            <div class="alert alert-success" role="alert">
                Successfully deleted product.
            </div>
        @endif
        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Added At</th>
                    @if (auth()->user()->role === 'management')
                        <th scope="col">Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->created_at }}</td>
                        @if (auth()->user()->role === 'management')
                            <td>
                                <a href="#" data-toggle="modal"
                                    data-target="#confirmPasswordModal{{ $product->id }}">Edit</a>
                            </td>
                        @endif
                    </tr>

                    <!-- Modal for Confirm Password -->
                    <div class="modal fade" id="confirmPasswordModal{{ $product->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="confirmPasswordModalLabel{{ $product->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmPasswordModalLabel{{ $product->id }}">Confirm
                                        Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('product.verifyPassword', $product->id) }}" method="post">
                                        @csrf
                                        @method('post')
                                        @if ($errors->has('password'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @for ($i = $products->count() + 1; $i <= 10; $i++)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                        @if (auth()->user()->role === 'management')
                            <td><br></td>
                        @endif
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
