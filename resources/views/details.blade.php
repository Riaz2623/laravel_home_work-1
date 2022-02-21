@extends('master')

@section('title')
    details page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{$data['image']}}" alt="" class="card-img-top" style="height: 350px;"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="card-title"><{{$data['name']}}/h1>
                        <h3>TK. {{$data["price"]}}</h3>
                        <h4>{{$data["brand"]}}</h4>
                        <h6>{{$data["description"]}}
                            This is a bangladesh is best product a
                            apx brand all category product.
                        </h6>
                        <hr/>
                        <button type="button" class="btn btn-outline-success">Add To Card</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
