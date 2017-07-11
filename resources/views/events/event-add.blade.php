@extends('main')

{{--Disabled csrf for some routes--}}

@section('content')
    <form action="{{route('event-save')}}" method="post" id="locationForm">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add new event</h3>
                    </div>
                    <div class="panel-body">

                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Event title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter the event">
                            <span class="error">{{$errors->first('title')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="title">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                   placeholder="Enter the event address">
                            <span class="error">{{$errors->first('address')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="title">Start date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                   placeholder="Enter the event start date">
                            <span class="error">{{$errors->first('start_date')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="title">End date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                   placeholder="Enter the event end date">
                            <span class="error">{{$errors->first('end_date')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea
                                    id="description"
                                    name="description" class="form-control"
                                    placeholder="Enter the description"></textarea>
                            <span class="error">{{$errors->first('description')}}</span>
                        </div>

                        <button class="btn btn-primary">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Select the location</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <span class="error">{{$errors->first('lat')}}</span>
                            <span class="error">{{$errors->first('long')}}</span>
                            <google-map></google-map>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
        })
    </script>
@endsection