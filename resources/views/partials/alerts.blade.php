@foreach(['info', 'danger', 'success', 'warning'] as $message)
    @if(Session::has('alert-'.$message))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alerts">
                        <div class="alert alert-{{ $message }} alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('alert-'.$message) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
