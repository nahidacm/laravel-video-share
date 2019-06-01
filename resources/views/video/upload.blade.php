@extends('layouts.app');

@section('content')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            <form method="post" action="{{url('/create/ticket')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="video">Video</label>
                    <input type="file" class="form-control-file" name="video" id="video" placeholder=""
                           aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">Supports: mp4</small>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <div class='input-group date' id='production_date'>
                        <input type='text' class="form-control" name="production_date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class='input-group date' id='air_date'>
                        <input type='text' class="form-control" name="air_date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#production_date').datetimepicker();
                        $('#air_date').datetimepicker();
                    });
                </script>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>

@endsection