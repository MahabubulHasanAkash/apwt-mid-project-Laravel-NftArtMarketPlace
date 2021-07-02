<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('includes.head')
        <title>Marketplace</title>
    </head>
    <style> 

    .container
  {
    position: absolute;
    left: 40%;
    top: 65.5%;
    height: 200px;
    margin-top: -100px /* half of you height */
    width: 300px;
    margin-left: -200px /* half of you width */
  }

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.scrollmenu {
  
  overflow: auto;
  white-space: nowrap;
}

.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.scrollmenu a:hover {
  background-color: #777;
}
</style>

<body class="w3-theme-l5">
    @include('includes.adminNav')
    
<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
  
    <!-- The Grid -->
    <div class="w3-row-padding">
    
      <!-- Left Column -->
      @include('includes.adminSideBar')
  
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white"><br>  
          <a href="{{ URL::previous() }}" class="fa fa-mail-reply"> Go Back</a>
          {{-- <div class="w3-searchbar" style="float:right">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button><br>
        </div><br><br><br>           --}}
        <form class="w3-container" action="/admin/searchCollector" method="post" style="float:right">
          @csrf
          <input type="text" placeholder="Search Collector " name="search">
          <button type="submit"><i class="fa fa-search"></i></button><br>
          </form><br><br><br>
                        
          
        <p class="fa fa-users w3-large"> View Collectors</p> <br> <br>
          
          <div class="w3-container w3-padding "><br>
            <h6 class="w3-opacity">Collectors</h6>
            <table>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                
              </tr>
              
              @foreach ($collectors as $admins) 
            <tr>
                  <td>{{$admins->name}}</td>
                  <td>{{$admins->email}}</td>
                  <td>   
                    <a href="/admin/viewCreator/delete/{{$admins->id}}"> Delete</a>
                </td>
              @endforeach
            
          </tr>
            
         
            </table><br><br>
            <br><br><br><br>
          </div>
        </div>
      </div><br>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div><br>



<!-- Footer -->
@include('includes.footer')
 

</body>
</html> 



