@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <i class="material-icons">close</i>
        </button>
        <span>{{$error}}</span>
      </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
        </button>
        <span>{{session('success')}}</span>
    </div>
@endif

@if (session('erorr'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
        </button>
        <span>{{session('erorr')}}</span>
    </div>
@endif