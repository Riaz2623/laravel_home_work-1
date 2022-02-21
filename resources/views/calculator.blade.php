
@extends('master')

@section('title')
    calculator page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">Calculator</div>
                    <div class="card-body">
                        <form action="{{route('calculator')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3">Start Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="start_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="last_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="number"  class="form-control" value="{{isset($result) ? $result: ''}}"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit"  class="btn btn-outline-success" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
