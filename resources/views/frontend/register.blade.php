<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="signUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signUpLabel">Sign Up</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="input-groups">
                            <label for="email" class="d-block">Email Address</label>
                            <input type="email" placeholder="Eg: John  Doe" class="form-control" name="email">   
                        </div>
                        <div class="input-groups">
                            <label for="" class="d-block">Phone Number</label>
                            <input type="text" placeholder="Eg: 9840000000" class="form-control" name="phone">                           
                        </div>
                        <div class="input-groups">
                            <label for="" class="d-block">Password</label>
                            <input type="password" placeholder="Eg: John  Doe" class="form-control" name="password">                           
                        </div>
                        <div class="input-groups">
                            <label for="" class="d-block">Confirm password</label>
                            <input type="password" placeholder="Eg: John  Doe" class="form-control" name="password_confirmation">
                        </div>
                        <button type="submit" class="main-button ">Log In <i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@push('register-success')
<script>
    toastr.options = 
    {
        "closeButton" : true,
        "progressBar" : true    
    }
    @if ($errors->has('email'))
        toastr.error("{{ $errors->first('email') }}")
    @endif
    @if ($errors->has('phone'))
        toastr.error("{{ $errors->first('phone') }}")
    @endif 
    @if ($errors->has('password'))
        toastr.error("{{ $errors->first('password') }}")
    @endif          
    @if(Session::has('success'))
        toastr.success("{{session('success')}}")
    @endif
</script>
@endpush