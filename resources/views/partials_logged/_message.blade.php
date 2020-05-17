<div class="message-container">
    @if (Session::has('success'))
    <br>
    <div class="alert alert-success" role="alert">
        <strong>

        </strong>
        {{Session::get('success')}}
    </div>
    {{-- <a class="btn btn-indigo waves-effect waves-light" onclick="toastr.info('Hi! I am info message.', '', {positionClass: 'md-toast-bottom-left'});">Bottom
        left</a> --}}
    @endif
    @if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <strong>
            Error:
        </strong>
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
