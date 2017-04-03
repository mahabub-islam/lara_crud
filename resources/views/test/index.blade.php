@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Test Information</div>
                    <div class="panel-body">

                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table style="width: 100%;" class="table">
                            <thead>
                            <tr>
                                <td>SL</td>
                                <td>Test Name</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>

                            @foreach($tests as $test)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$test->name}}</td>
                                    <td>
                                        <a href="{{ url('/test/'.$test->id.'edit') }}">Edit</a>
                                        <a href="{{ url('/test/'.$test->id) }}" type="delete">Delete</a></td>
                                </tr>
                                <?php $i = $i +1 ?>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
