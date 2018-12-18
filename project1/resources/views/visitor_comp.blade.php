<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css" />


    



  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
 </head>
 <body>  
  <nav class="navbar navbar-inverse">
    <div class="container">
        <img src="Images/logo.png">
          <a class="navbar-brand ">
            
            &nbspProfessional Development Center
          </a>
  </nav>
 <br />
  <div class="container">
   <br />
   <h2 align="center"></h2><br />
   
   <form {{-- method="post" --}} id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Company Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Contact Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Placement Details</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill the company details</div>
       <div class="panel-body">

        <div class="form-group">
         <label>Company Name</label>
         <input type="text" name="comp_name" id="comp_name" class="form-control" />
         <!-- <span id="error_email" class="text-danger"></span> -->
        </div>

        <div class="form-group">
         <label>Comapny Website</label>
         <input type="text" name="comp_website" id="comp_website" class="form-control" />
         <!-- <span id="error_email" class="text-danger"></span> -->
        </div>

        <div class="form-group">
         <label>Comapny Address</label>
         <input type="text" name="comp_address" id="comp_address" class="form-control" />
         <!-- <span id="error_email" class="text-danger"></span> -->
        </div>
        

        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label>Date of Establishment</label>
              <input type="text" name="comp_est_date" id="comp_est_date" class="form-control" />
              <!-- <span id="error_email" class="text-danger"></span> -->
            </div>
            <div class="col-md-6">
              <label>Date of Registration</label>
              <input type="text" name="comp_reg_date" id="comp_reg_date" class="form-control" />
              <!-- <span id="error_email" class="text-danger"></span> -->
            </div>
          </div>
         
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label>Number of Employees</label>
              <input type="text" name="num_employees" id="num_employees" class="form-control" />
              <!-- <span id="error_email" class="text-danger"></span> -->
            </div>
            <div class="col-md-6">
              <label>Number of Techleads</label>
              <input type="text" name="num_techleads" id="num_techleads" class="form-control" />
              <!-- <span id="error_email" class="text-danger"></span> -->
            </div>
          </div>
         
        </div>




        <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Password</label>
         <input type="password" name="password" id="password" class="form-control" />
         <span id="error_password" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
    </div>
          <!-- hadanna -->

    <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill the contact details</div>
       <div class="panel-body">
        <div class="form-group field_wrapper">
          <label>Contact Person(Main)</label>
          <div class="row">
            <div class="col-md-3">
             <label>Name</label>
             <input type="text" name="first_name" id="first_name" class="form-control" />
             <span id="error_first_name" class="text-danger"></span>
            </div>
            {{-- <div class="col-md-3">
             <label>Last Name</label>
             <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
            </div> --}}
            <div class="col-md-3">
             <label>Telephone Number (Mobile)</label>
             <input type="text" name="tel" id="tel" class="form-control" />
             <!-- <span id="error_first_name" class="text-danger"></span> -->
            </div>
            <div class="col-md-3">
             <label>Email</label>
             <input type="text" name="fax" id="fax" class="form-control" />
             <!-- <span id="error_first_name" class="text-danger"></span> -->
            </div>
            <div class="col-md-3">
              <br>
             <button class="btn btn-primary btn-sm add_button">Add More</button>
            </div>
          </div>       
        </div>
        


              
        <!-- hadanna -->        
        <div class="form-group">          
          <label>Position</label>
          <input type="text" name="position" id="position" class="form-control"/>       
          
        </div>
        {{-- <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="female"> Female
         </label>
        </div>--}}
        <br /> 
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
    </div>

    <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill the placemet details</div>
       <div class="panel-body">
        {{-- <div class="form-group">
         <label>Enter Address</label>
         <input name="address" id="address" class="form-control"/>
         <span id="error_address" class="text-danger"></span>
        </div> --}}

        <div class="row">
          
          <div class="col-md-4">
            <div class="form-group">
             <label>Number of placements</label>
             <input name="no_of_placem" id="no_of_placem" class="form-control"/>
             {{-- <span id="error_address" class="text-danger"></span> --}}
            </div>
          </div>

          <div class="col-md-8" >
            <div class="form-group">
             <label>Select Fields(Please mention if Other is selected)</label><br>
             <select class="selectpicker form-control" style="width: auto;" multiple data-live-search="true">
               
              <option>Software Engineering(Java/J2EE)</option><option>Software Engineering(.NET/C#)</option><option>Software Engineering(C++)</option>
              <option>Web Development(PHP, Python, Ruby, JavaScript)</option>
              <option>Solutions Architect</option>
              <option>Quality Assurance</option>
              <option>Networking / System /LMS Administration</option>
              <option>Business Analyst</option>
              <option>Financial Analyst</option>       
              <option>Database Administration</option>
              <option>Digital Video Production /3D Animation / Multimedia</option>
              <option>Management Trainee</option>
              <option>Project Management</option>
              <option>Mobile Application Development /Embedded System Development</option>
              <option>User Interface (UI/UX) Engineer</option>
              <option>Game Development</option>
              <option>Data Analysis/Business Intelligence</option>
              <option>Information Security</option>
              <option>Other</option>
                
               
              </select>  
            </div>
          </div>
        </div>

        <div class="form-group">            
          <label>Mention other fields</label>
          <input type="textarea" name="other_field" class="form-control"></textarea>          
        </div>

        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
        </div>

        <br />
       </div>
      </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_email = '';
  var error_password = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
  
  // if($.trim($('#password').val()).length == 0)
  // {
  //  error_password = 'Password is required';
  //  $('#error_password').text(error_password);
  //  $('#password').addClass('has-error');
  // }
  // else
  // {
  //  error_password = '';
  //  $('#error_password').text(error_password);
  //  $('#password').removeClass('has-error');
  // }

  if(error_email != '' || error_password != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  
  if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  
  // if($.trim($('#last_name').val()).length == 0)
  // {
  //  error_last_name = 'Last Name is required';
  //  $('#error_last_name').text(error_last_name);
  //  $('#last_name').addClass('has-error');
  // }
  // else
  // {
  //  error_last_name = '';
  //  $('#error_last_name').text(error_last_name);
  //  $('#last_name').removeClass('has-error');
  // }

  if(error_first_name != '')//|| error_last_name != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    var maxField = 3; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<br><div class="form-group"><label>Contact Person(Sub)</label><div class="row"><div class="col-md-3"><label>Name</label><input type="text" first_name" id="first_name" class="form-control" /></div><div class="col-md-3"><label>Telephone Number (Mobile)</label><input type="text" name="tel" id="tel" class="form-control" /></div><div class="col-md-3"><label>Email</label><input type="text" name="fax" id="fax" class="form-control" /></div><div class="col-md-3"><br><button class="btn btn-primary btn-sm remove_button">Remove</button></div></div></div>'; 
    //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>





