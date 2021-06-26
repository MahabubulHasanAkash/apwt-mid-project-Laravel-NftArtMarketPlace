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
    @include('includes.adminNav')<br>
    


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
            <div class="w3-searchbar" style="float:right">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button><br>
        </div><br><br><br>

        <p class="fa fa-bullhorn w3-large"> Announcement</p> <br> <br>   
        
               
        <form method="post">
            <table>
                <tr>
                    <td><b>Title</b></td>
                    <td><input type="text" class="form-control" name="title" value=""></td>
                    
                </tr>
                <tr>
                    <td><b>Details</b></td>
                    {{-- <td><input type="text" name="announcement"></td> --}}
                
                    <td><textarea type="text" name="details" class="form-control" value="" rows="6" cols="100"></textarea></td>
                    
                </tr>
                
            </table><br><input style="float: right;" type="Submit" name="submit"><br>
          
            </form><br>
        
      

                 
          <div class="w3-container w3-padding "><br>
           
            <h6 class="w3-opacity">Announcements</h6>
            <table>
              <tr>
                <th>Title</th>
                <th>Details</th>    
                <th>Action</th>
                
              </tr> 
              @foreach ($announcementList as $announcements) 

            <tr>
              
            <td>{{$announcements['title']}}</td>
			      <td>{{$announcements['details']}}</td>
            
            <td>   
                <a href="/announcement/edit/{id}{{$announcements['id']}}"> Edit</a> |
                <a href="/announcement/delete/{id}{{$announcements['id']}}"> Delete</a>
            </td>
		        </tr>
            
            
            
            @endforeach
              {{-- <tr>
                
                <td>About Tonight</td>
                <td>There will be a serprise tonight. Please be available at 9 pm.</td>
                
                <td><a href="admin/announcement/{announcement}/edit">Edit</a></td>
                <td><a href="admin/announcement/{announcement}">Delete</a></td>

              </tr> --}}
              
            </table><br><br>
            <br><br><br><br>
          </div>
        </div>
      </div><br>
    </div><br><br><br>
        </div><br>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div><br><br>



<!-- Footer -->
@include('includes.footer')
 

</body>
</html> 



