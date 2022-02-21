
@extends('master')
@section('title')
    series page
@endsection

@section('body')

    <section class="py-5 bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" >
                    <div class="card ">
                        <div class="card-header"><h3>Please Fill Up</h3></div>
                        <div class="card-body">
                            <form action="{{route('series')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">End Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Total</label>
                                    <div class="col-md-9">
                                        <textarea readonly class="form-control">
                                            {{ isset($request) ? $request: ''}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <label class="col-form-label">
                                            <input type="submit" class="btn btn-outline-dark" value="submit" /></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
