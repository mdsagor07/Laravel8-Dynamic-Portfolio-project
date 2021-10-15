<x-app-layout>
    <x-slot name="header">
        <h2> All category
       
        </h2>
        
     
    </x-slot>

    <div class="py-12">
     
    <div class="container">
     
     <div class="row">

         <div class="col-md-8">

       

          <div class="card">

          @if (session('success1'))
         <div class="alert alert-primary" role="alert">
         {{ session('success1') }}
         </div>
        @endif 

              <div class="card-header"> All Category</div>
         
        
     <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">User_id</th>
      <th scope="col">category_name</th>
      <th scope="col">Create_At</th>
    </tr>
  </thead>
  <tbody>
  <!-- @php($i=1) -->

  @foreach($allcat as $allcats)
    <tr>
      <th scope="row">{{$allcat->firstItem()+ $loop->index}}</th>
      <!-- <td>{{$allcats->user_id}}</td> -->
      <td>{{$allcats->name}}</td>
      <td>{{$allcats->category_name}}</td>
      <td>{{$allcats->created_at}}</td>
    </tr>

    @endforeach
    
   
    
  </tbody>
</table>
 {{ $allcat->links() }} 

         </div>
          </div>


          <div class="col-md-4">
          <div class="card">
              <div class="card-header"> All Category</div>
         
            <div class="card-body">

              <form action="{{route('store.category')}}" method="POST">
                  @csrf
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name="category_name" class="form-control" 
    id="exampleInputEmail1" aria-describedby="emailHelp"  required>
               
  

     </div>
    
 

  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
</div>
              </div>
          </div>

     </div>

    </div>
    </div>
</x-app-layout>
