<x-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">User</li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">


    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">User Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="col-12">
              <label for="title" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" name="name" placeholder="name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" placeholder="email" value="{{old('email')}}">
                @error('email')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Phone</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" name="phone" placeholder="phone" value="{{old('phone')}}">
                @error('phone')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>                        
            @if(Session::has('message'))
                <span class="text-success">
                    <p>{{ Session::get('message') }}</p>
                </span>
            @endif            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
</x-layout>