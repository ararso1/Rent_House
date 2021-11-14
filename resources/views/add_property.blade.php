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
          {{ __('Add property') }}
      </h2>
    </x-slot>
  


  <form class="row g-3 needs-validation" action="add_property" method="POST" enctype="multipart/form-data"ovalidate>
    @csrf
    <div class="col-md-6">
      <div class="col-md-10">
        <label for="validationCustom01" class="form-label">State</label>
        <input type="text" class="form-control" name="state" id="validationCustom01" placeholder="Enter your Home State" required>
        <div class="invalid-feedback">
          Please enter a valid state.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">Zone</label>
        <input type="text" class="form-control" name="zone" id="validationCustom02" placeholder="Enter Your Home Zone" required>
        <div class="invalid-feedback">
          Please enter a valid Zone.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">District</label>
        <input type="text" class="form-control" name="district" id="validationCustom02" placeholder="Enter Home's district" required>
        <div class="invalid-feedback">
          Please enter a valid District.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">City</label>
        <input type="text" class="form-control" name="city" id="validationCustom02" placeholder="Enter Home's City" required>
        <div class="invalid-feedback">
          Please enter a valid city.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">Sub-city</label>
        <input type="text" class="form-control" name="sub_city" id="validationCustom02" placeholder="Sub-city" required>
        <div class="invalid-feedback">
          Please enter a valid sub-city.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">Contact No.:</label>
        <input type="text" class="form-control" name="contact" id="validationCustom02" placeholder="Enter Your Contact" required>
        <div class="invalid-feedback">
          Please enter a valid contact number.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">Property Type</label>
        <input type="text" class="form-control" name="property_type" id="validationCustom02" placeholder="Enter Type of home" required>
        <div class="invalid-feedback">
          Please enter a valid valid property type.
        </div>
      </div>
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">House No.:</label>
        <input type="text" class="form-control" name="house_no" id="validationCustom02" placeholder="Enter house number" required>
        <div class="invalid-feedback">
          Please enter a valid number of rooms.
        </div>
      </div>
     
    </div>

   <div class="col-md-6">
      <div class="col-md-10">
        <label for="validationCustom02" class="form-label">Estimated Price:</label>
        <input type="text" class="form-control" name="price" id="validationCustom02" placeholder="Enter price" required>
        <div class="invalid-feedback">
          Please enter a valid price b/n 500-30,000 birr.
        </div>
      </div> 
    <div class="col-md-10">
      <label for="validationCustom02" class="form-label">Total No. of Rooms:</label>
      <input type="number" class="form-control" name="rooms" id="validationCustom02" placeholder="Enter number of rooms" required>
      <div class="invalid-feedback">
        Please enter a valid number of rooms.
      </div>
    </div>
    <div class="col-md-10">
      <label for="validationCustom02" class="form-label">No. of Bed Rooms:</label>
      <input type="number" class="form-control" name="bed_rooms" id="validationCustom02" placeholder="Enter Number of Rooms" required>
      <div class="invalid-feedback">
        Please enter a valid number of Bedrooms.
      </div>
    </div>
    <div class="col-md-10">
      <label for="validationCustom02" class="form-label">No. of kitchen:</label>
      <input type="text" class="form-control" name="kitchen" id="validationCustom02" placeholder="Enter Number of Kitchen" required>
      <div class="invalid-feedback">
        Please enter a valid number of kitchen.
      </div>
    </div>
    <div class="col-md-10">
      <label for="validationCustom02" class="form-label">No. of Bathroom/Washroom:</label>
      <input type="text" class="form-control" name="bathrooms" id="validationCustom02" placeholder="Enter Number of Bathroom/washrooms" required>
      <div class="invalid-feedback">
        Please enter a valid number of bathrooms.
      </div>
    </div>
    <div class="col-md-10">
      <label for="validationCustom02" class="form-label">Full Description:</label>
      <input type="text" class="form-control" name="description" id="validationCustom02" placeholder="Write description of homes" required>
      <div class="invalid-feedback">
        Please enter a valid description of the house.
      </div>
    </div>
    <div class="col-md-10">
      <label for="validationCustom02" class="form-label">Upload Photos:</label>
      <input type="file" class="form-control" name="photo" id="validationCustom02" required>
      <div class="invalid-feedback">
        Please upload a valid images of house.
      </div>
    </div>


    <div class="col-md-10 submit">
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('js/validation.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

</x-app-layout>