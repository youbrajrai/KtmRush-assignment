<x-layout>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Order</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Order</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-md-12">
        <div class="card">
            <div class="card-header left">
                <h4 class="card-title pull-left"> Order Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.N</th>
                                <th>Order Number</th>
                                <th>Username</th>
                                <th>Items</th>
                                <th>Total Amount</th>
                                <th>Ordered At</th>
                                <th>Status</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $val)
                            <tr>
                                <td>{{$val->id}}</td>
                                <td>{{$val->order_number}}</td>
                                <td>{{$val->name}}</td>
                                <td>{{$val->item_count}}</td>
                                <td>{{$val->grand_total}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>{{$val->status}}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</x-layout>
