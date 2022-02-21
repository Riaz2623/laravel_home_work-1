
@extends('master')

@section('title')
    blog page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{$product['image']}}" alt="" class="card-img-top" style="height: 300px">
                    </div>
                    <div class="card-body">
                        <h1>{{$product['name']}}</h1>
                        <h1>TK .{{$product['price']}}</h1>
                        <hr/>
                        <a href="{{route('details',['id'=>$product ['id']])}}" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
