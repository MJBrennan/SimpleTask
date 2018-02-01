<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User Details</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>

  .content {
  width: 700px ;
  margin-left: auto ;
  margin-right: auto ;
}

body{

  background:#ffffff;



}


  </style>


 
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<div id="app">


<div class="row">

<div class="col-md-2">  

</div>

<div class="col-md-8">

   <div class="page-header">
  <h1>Fusio Technical Interview</h1>
</div>

 
      
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">User Details</h3>
    </div>
    <div class="panel-body">

<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Email</label>
    <input type="text" class="form-control" v-model="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Name</label>
    <input type="text" v-model="name" class="form-control">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Address Line 1</label>
    <input type="text" class="form-control" v-model="address_1">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Address Line 2</label>
    <input type="text" class="form-control" v-model="address_2">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Eircode</label>
    <input type="text" class="form-control" v-model="eircode">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Country</label>
    <input type="text" class="form-control" v-model="country">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input  class="form-control" v-model="password" type="password">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Profile Picture</label>
    <input type="file" v-on:change="onFileChange" accept="image/*" class="form-control">
     </div>
  <div class="form-group">
    <button type="button"  v-on:click="submit()" class="btn btn-primary">Submit</button>
  </div>
</form>

</div>

</div>


</div>

<div class="col-md-2">  

</div>
</div>
</div>



   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    

    
</body>
</html>