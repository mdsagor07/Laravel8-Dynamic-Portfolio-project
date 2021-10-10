<x-app-layout>
    <x-slot name="header">
        <h2> hi..{{Auth::User()->name}}
        <b style="float:right">Total User:
            <span>{{count($users)}}</span>
        </b>
        </h2>
        
     
    </x-slot>

    <div class="py-12">
     
    <div class="container">
     
     <div class="row">
        
     <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Create_At</th>
    </tr>
  </thead>
  <tbody>
      @php($i=1)
      @foreach($users as $users)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->created_at->diffforhumans()}}</td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>

     </div>

    </div>
    </div>
</x-app-layout>
