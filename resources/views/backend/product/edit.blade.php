<x-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Product</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Product</li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">


    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$product->title}}" name="title" placeholder="Title" value="{{old('title')}}">
                @error('title')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Parent Category</label>
              <select class="form-control" name="category_id" id="category">
                <option value="">Category Name</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" 
                        @if ($product->category_id!=null && $product->category_id==$category->id)
                        selected
                        @endif
                        >{{$category->title}}</option>
                @endforeach
                </select>
                @error('category_id')
                <span class="text-danger" role="alert">
                    <p>{{ $message }}</p>
                </span>
                @enderror           
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Select Color</label>
                <div class="row">
                    @forelse($colors as $val)
                    <div class="mb-3">
                        <input type="checkbox" name="colors[]" value="{{$val->title}}"/>
                          {{$val->title}}
                    </div>
                    @empty
                    <div class="mb-12">
                        <h3>No Colors Found </h3>
                    </div>
                    @endforelse
                </div>          
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Select Size</label>
                <div class="row">
                    @forelse($sizes as $val)
                    <div class="mb-3">
                        <input type="checkbox" name="sizes[]" value="{{$val->title}}"/>
                          {{$val->title}}
                    </div>
                    @empty
                    <div class="mb-12">
                        <h3>No Sizes Found </h3>
                    </div>
                    @endforelse
                </div>          
            </div> 
            <div class="col-12">
              <label for="title" class="form-label">Quantity</label>
              <input type="number" class="form-control @error('quantity') is-invalid @enderror" value="{{$product->quantity}}" name="quantity" placeholder="Quantity" value="{{old('quantity')}}">
                @error('quantity')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>                       
            <div class="col-6">
              <label for="title" class="form-label">Original Price</label>
              <input type="number" class="form-control @error('original_price') is-invalid @enderror" value="{{$product->original_price}}" name="original_price" placeholder="Original Price" value="{{old('original_price')}}">
                @error('original_price')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-6">
              <label for="title" class="form-label">Selling Price</label>
              <input type="number" class="form-control @error('selling_price') is-invalid @enderror" value="{{$product->selling_price}}" name="selling_price" placeholder="selling Price" value="{{old('selling_price')}}">
                @error('selling_price')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>            
            <div class="col-12">
              <label for="description" class="form-label">Description</label>              
              <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description">{{old('description',$product->description)}}</textarea>
                @error('description')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div> 
            <div class="col-6">
              <label for="trending" class="form-label">Trending</label>
              <input name="trending" type="hidden" value="0">
              <input type="checkbox" name="trending" value="1"/>
                @error('trending')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div> 
            <div class="col-6">
              <label for="status" class="form-label">Status</label>  
              <input name="status" type="hidden" value="0">           
              <input type="checkbox" name="status" value="1"/>
                @error('stauts')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>                                                                         
            <div class="col-12">
              <label for="title" class="form-label">Image</label>
              <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
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
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

</x-layout>