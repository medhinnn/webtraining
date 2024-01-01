@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card">
           <div class="card-header">Manage Products
           </div>
           <div class="card-body">
            <div>  

                <a href="{{ route('admin.product.create') }}">
                    <button type="button" class="btn btn-primary float-end">
                            Create Product
                    </button>
                </a>
                <br>
            </div>
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Show</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
             <tbody>
                @foreach ($viewData['products'] as $product)
                <tr>
                    <td>{{$product->id}}</td>

                    <td><img src="{{ asset('/storage').'/' . $product->image }}" style="width: 50px; height:50px"></td>
                    <td>{{$product->name}}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}">
                        <button class="btn btn-primary">
                        <i class="bi-pencil"></i>   
                    </button></a>
                </td>
                    <td>
                        <a href="{{ route('admin.product.show', ['id' => $product->id]) }}">
                            <button class="btn btn-secondary">
                        <i class="bi-eye">  </button></a></td>
                    <form action="{{ route('admin.product.delete', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                   
                    <td><button class="btn btn-danger" onclick="return confirm('do you want to delete')">
                        <i class="bi-trash"></i> 
                    </form>
                    </td>
                </tr>
                @endforeach
             </tbody>
           </table>
           </div>
       </div>
@endsection