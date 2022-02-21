
@extends('master')
@section('title')
    home page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card-header">Full Name</div>
                    <form action="{{route('full-name')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text"  class="form-control" value="{{isset($result) ? $result: ''}}"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit"  class="btn btn-outline-success" value="submit"/>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
