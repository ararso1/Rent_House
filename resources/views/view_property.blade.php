<x-app-layout>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>


<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('View Property') }}
    </h2>
</x-slot>
<div class="tbl">
    <table class="table table-striped table-hover">
        <thead>
          <tr class="table-success">
            <th scope="col">Id</th>
            <th scope="col">State</th>
            <th scope="col">Zone</th>
            <th scope="col">District</th>
            <th scope="col">City</th>
            <th scope="col">Sub-city</th>
            <th scope="col">Contact</th>
            <th scope="col">property Type</th>
            <th scope="col">House No.</th>
            <th scope="col">Price</th>
            <th scope="col">No. of Rooms</th>
            <th scope="col">No. of bedrooms</th>
            <th scope="col">No. of Kitchen</th>
            <th scope="col">No. of Bathrooms</th>
            <th scope="col">Description</th>
            <th scope="col">Photo</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($owners as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->state}}</td>
            <td>{{$item->zone}}</td>
            <td>{{$item->district}}</td>
            <td>{{$item->city}}</td>
            <td>{{$item->sub_city}}</td>
            <td>{{$item->contact}}</td>
            <td>{{$item->property_type}}</td>
            <td>{{$item->house_no}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->rooms}}</td>
            <td>{{$item->bed_rooms}}</td>
            <td>{{$item['kitchen']}}</td>
            <td>{{$item->bathrooms}}</td>
            <td>{{$item->description}}</td>
            <td><img src="{{asset('images/'.$item->photo)}}" alt="image" width="100px" height="100px"></td>
            <td>
              <a href="#" class="btn btn-primary">Edit</a>
              <a href="{{'delete/'.$item['id']}}" class="btn btn-danger">Delete</a>
            </td>      
          </tr>
              
          @endforeach
          
         
        </tbody>
    </table>
</div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('js/validation.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

 
</x-app-layout>
