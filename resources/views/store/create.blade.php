@extends('layouts.app')
@section('content')
    <x-navigation.admin></x-navigation.admin>
    <div class="container col-8">
        <form action="{{route('store')}}" method="post" class=" shadow rounded-md p-4 mt-4 border border-1 border-secondary rounded-3">
            <header class="mb-4">
                <h1>Product Register Form</h1>
            </header>
            <div class="form-content p-0 m-0 mb-4">
                <div class="form-floating  p-0">
                    <input type="text" name="product-name" id="floatingInput" class="form-control" placeholder="Product Name">
                    <label for="floatingInput">Product Name</label>
                </div>
                <div class="form-floating  p-0">
                    <input type="text" name="product-category" id="floatingInput2" class="form-control" placeholder="Product Category">
                    <label for="floatingInput2">Product Category</label>
                </div>
                <div class="form-floating  p-0">
                    <input type="text" name="product-seller" id="floatingInput3" class="form-control" placeholder="Product Category">
                    <label for="floatingInput3">Product Seller</label>
                </div>
                
                <div class="form-floating  p-0">
                    <input type="email" name="product-email" id="floatingEmail" class="form-control" placeholder="Product Email">
                    <label for="floatingEmail">Product Email</label>
                </div>
                <div class="form-floating  p-0">
                    <input type="text" name="product-address" id="floatingInput" class="form-control" placeholder="Product Address">
                    <label for="floatingInput">Product Address</label>
                </div>
                <div class="form-floating  p-0">
                    <input type="text" name="product-price" id="floatingInput" class="form-control" placeholder="Product Price">
                    <label for="floatingInput">Product Price</label>
                </div>
                <div class=" p-0">
                    <select name="product-category" id="" class="form-select">
                        <option selected>Select Product Category</option>
                        <option value="1">Clothing</option>
                        <option value="2">Footwear</option>
                        <option value="3">Eyewear</option>
                        <option value="4">Shoes</option>
                    </select>
                </div>
                <div class=" p-0">
                    <input type="file" name="product-image" id="" class="form-control" placeholder="Upload Product Image">
                </div>
            </div>

            <div class="actions d-flex gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
@endsection