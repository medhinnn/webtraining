@extends('layouts.app')


@section('title', $viewData['title'])


@section('subtitle', $viewData['subtitle'])


@section('content')
    <div class="card">
        <div class="card-header"> Products in Cart
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                congradulation purches order number is <b>#{{ $viewData['order']->id}}
            </b>
            </div>
        </div>
        </div>
        @endsection
    