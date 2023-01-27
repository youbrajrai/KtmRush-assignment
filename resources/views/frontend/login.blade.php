<div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="logInLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="logInLabel">Log In</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="{{route('login')}}">
                    @csrf
                        <div class="input-groups">
                            <label for="email" class="d-block">Email Address</label>
                            <input type="email" placeholder="Eg: John  Doe" class="form-control" name="email" required>
                           
                        </div>
                        <div class="input-groups">
                            <label for="password" class="d-block">Password</label>
                            <input type="password" placeholder="Eg: John  Doe" class="form-control" name="password" required>
                          
                        </div>
                        <button type="submit" class="main-button ">Log In <i class="fa fa-arrow-right"></i></button>
                    </form>
                    <br>
                    <p class="text-center">No Account Yet? <a href="" data-bs-toggle="modal"
                            data-bs-target="#signUp"><strong>Sign Up</strong></a></p>
                </div>
            </div>

        </div>
    </div>
</div>
@push('login-success')
<script>
    toastr.options = 
    {
        "closeButton" : true,
        "progressBar" : true    
    }
    @if ($errors->has('email'))
        toastr.error("{{ $errors->first('email') }}")
    @endif

    @if ($errors->has('password'))
        toastr.error("{{ $errors->first('password') }}")
    @endif          
    @if(Session::has('success'))
        toastr.success("{{session('success')}}")
    @endif
    @if(Session::has('fail'))
        toastr.error("{{session('fail')}}")
    @endif    
</script>
@endpush