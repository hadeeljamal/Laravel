{{--BEGIN VALIDATION  MESSAGES--}}
<div class="row">
    <div class="col-md-12">
        <!-- block -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success my-alert-success alert-message">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><span class="fa fa-check"></span> {{ $message }} </strong>
            </div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning my-alert-warning alert-message">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><span class="fa fa-warning"></span> {{ $message }} </strong>
            </div>
        @endif
        @if ($message = Session::get('danger'))
            <div class="alert alert-danger my-alert-danger alert-message">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><span class="fa fa-remove"></span> {{ $message }} </strong>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissable my-alert-danger alert-message">
                <a class="panel-close close" data-dismiss="alert">×</a>
{{--                <strong>انتبه: </strong>--}}
                <ul style="list-style: square">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</div>
{{--END VALIDATION  MESSAGES--}}
