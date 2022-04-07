



<div class="row">
    <div class="col-lg-12">
        <h2>Crud task</h2>                 
    </div>
</div><!-- /.row -->



<!----
<div class="row">
    <div class="col-lg-12">
        <a href="javascript:void(0);" data-toggle="modal" data-target="#add-employee" class="pull-right btn btn-primary btn-xs" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Add Employee</a>                
    </div>
</div><!-- /.row -->
---->












<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>user List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    --->
</head>
<body>

















<div class="container">

    <div class="row">

  
        <div class="col-12">
            <div class="col-md-12">
                <h1>Crud task
                    <small>List of users</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
            
            <div class="row">   
    <div class="col-lg-12"><span id="success-msg"></span></div>
        <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr class="bg-primary">
      <th width="15%">ID</th>
        <th width="15%">First Name</th>
        <th width="15%">Last Name</th>
        <th width="15%">Email</th>        
        <th width="10%">Phone</th>
        <th width="10%">Salary</th>
        <th width="25%">Action</th> 
      </tr>
    </thead>
    <tbody id="show_data">
                    
                </tbody>
  </table>
</div>
</div><!-- /.row -->






            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last NAme</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>






















<!---


<div class="container">
 
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>user
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
             
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>lastname</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
        </div>
    </div>
         
</div>
 ----->
      
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
              
      <!----            
///$attributes= array('role'=>'user_view');
//echo form_open('http://localhost/crudajax27/index.php/user/save',$attributes);

----->            
                       

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID</label>
                            <div class="col-md-8">
                              <input type="text" name="id" id="id" class="form-control" placeholder="ID">
                              <span id="idErr" class="text-danger"></span>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Firstname</label>
                            <div class="col-md-8">
                              <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                              <span id="firstnameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Lastname</label>
                            <div class="col-md-8">
                              <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname">
                              <span id="lastnameErr" class="text-danger"></span>
                            </div>
                            
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email" id="email" class="form-control" placeholder="email">
                              <span id="emailErr" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Contact</label>
                            <div class="col-md-10">
                              <input type="text" name="contact" id="contact" class="form-control" placeholder="contact">
                              <span id="contactErr" class="text-danger"></span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address" id="address" class="form-control" placeholder="address">
                              <span id="addressErr" class="text-danger"></span>
                            </div>
                        </div>





                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
      
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID</label>
                            <div class="col-md-10">
                              <input type="text" name="id_edit" id="id_edit" class="form-control" placeholder="ID" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Firstname</label>
                            <div class="col-md-10">
                              <input type="text" name="firstname_edit" id="firstname_edit" class="form-control" placeholder="Firstname">
                              <span id="firstnameEDErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Lastname</label>
                            <div class="col-md-10">
                              <input type="text" name="lastname_edit" id="lastname_edit" class="form-control" placeholder="lastname">
                              <span id="lastnameEDErr" class="text-danger"></span>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email_edit" id="email_edit" class="form-control" placeholder="email">
                           
                              <span id="emailEDErr" class="text-danger"></span> </div>
                        </div>
                      

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Contact</label>
                            <div class="col-md-10">
                              <input type="text" name="contact_edit" id="contact_edit" class="form-control" placeholder="contact">
                              <span id="contactEDErr" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address_edit" id="address_edit" class="form-control" placeholder="address">
                            
                              <span id="addressEDErr" class="text-danger"></span>
                            </div>
                        </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
      
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>












            <form>
            <div class="modal fade" id="Modal_view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">view User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                 
                  <div class="form-group column">
                           
                            
                              <input type="text" name="id_edit" readonly>
                            
                        </div>




                        <div class="form-group column">
                           
                              <input type="text" name="email_edit" readonly>
                            
                        </div>
                      

                      




                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                  </div>
                </div>
              </div>
            </div>
            </form>
























<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>

<!---<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>-->









 
<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
 






 
<script type="text/javascript">
    $(document).ready(function(){
        show_user(); 
     	//	 $('#mydata').DataTable({sDom: 'lrtip'});
	//	$('#mydata').dataTable();
 // $('#mydata').dataTable({
 //   "bPaginate": true,
   // "sDom":'lrtip',
  //  "bLengthChange": false,
    //"bFilter": true,
   // "bInfo": false,
   // "bAutoWidth": false });
		//function show all user
        function show_user(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('user/user_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].firstname+'</td>'+
                                '<td>'+data[i].lastname+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                            '<td>'+data[i].contact+'</td>'+
                            '<td>'+data[i].address+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-firstname="'+data[i].firstname+'" data-lastname="'+data[i].lastname+'" data-email="'+data[i].email+'"  data-contact="'+data[i].contact+'"  data-address="'+data[i].address+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+' '+
                                    
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_view" data-id="'+data[i].id+'"  data-email="'+data[i].email+'">view</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save user
        $('#btn_save').on('click',function(){
            var id = $('#id').val();
            var firstname = $('#firstname').val();
            var lastname        = $('#lastname').val();
            var email = $('#email').val();
            var contact = $('#contact').val();
            var address = $('#address').val();
            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
            var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            var dataJson = { [csrfName]: csrfHash,id:id , firstname:firstname, lastname:lastname,email:email, contact:contact, address:address};
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/save')?>",
               dataType : "JSON",
                //data : {id:id , firstname:firstname, lastname:lastname,},
                data:dataJson,
                success: function(data){











 //   alert(data.error_string[2]);







/*

               var i=data.length;
              if(id==''){

                $('[name="id"]').after("<div class='alert alert-danger'>ID is required</div>");
              }

              else  if(firstname=='' ) {                      //if it is blank. alert('empty');    
    
                   $('[name="firstname"]').after("<div class='alert alert-danger'>First name is required</div>");
                 //  var complex =  
                 //  alert(complex);
                // console.log(data);
                }
else if(lastname == ''){
                $('[name="lastname"]').after("<div class='alert alert-danger'>Last name is required</div>");
              }
              else if(email == ''){
               $('[name="email"]').after("<div class='alert alert-danger'>Email is required</div>");
              
                  }    
                  else if(contact == ''){
               $('[name="contact"]').after("<div class='alert alert-danger'>Contact is required</div>");
                  }
           
                  else if(address == ''){      $('[name="address"]').after("<div class='alert alert-danger'>Address is required</div>");
                }
else{
*/
                  //  $('[name="firstname"]').val(data.error_string[0]);
                //    $('[name="lastname"]').val(data.error_string[1]);
              //  $('[name="contact"]').remove("<div class='alert alert-danger'>Contact is completed</div>");
             //   $('[name="firstname"]').val("");
           //         $('[name="lastname"]').val("");
                
              //  $('[name="email"]').val("");
               ////     $('[name="contact"]').val("");
               //     $('[name="address"]').val("");
                  //  $('[name="address"]')
































                  if(data.error)
                    {
                        if(data.idErr != '')
                        {
                          $('#idErr').html(data.idErr);
                        }
                        else
                        {
                          $('#idErr').html('');
                        }

                        if(data.firstnameErr != '')
                        {
                          $('#firstnameErr').html(data.firstnameErr);
                        }
                        else
                        {
                          $('#firstnameErr').html('');
                        }

                        if(data.lastnameErr != '')
                        {
                          $('#lastnameErr').html(data.lastnameErr);
                        }
                        else
                        {
                          $('#lastnameErr').html('');
                        }




                        if(data.emailErr != '')
                        {
                          $('#emailErr').html(data.emailErr);
                        }
                        else
                        {
                          $('#emailErr').html('');
                        }
                        if(data.contactErr != '')
                        {
                          $('#contactErr').html(data.contactErr);
                        }
                        else
                        {
                          $('#contactErr').html('');
                        }
                        if(data.addressErr != '')
                        {
                          $('#addressErr').html(data.addressErr);
                        }
                        else
                        {
                          $('#addressErr').html('');
                        }

                   }








                   //else{

                  //   // $('[name="id"]').val("");
                  //   // $('[name="firstname"]').val("");
                  //   // $('[name="lastname"]').val("");

                  //   $('#Modal_Add').modal('hide');
                  //   show_user();
                  // }
                  if(data==true){
                    $('[name="id"]').val("");
                     $('[name="firstname"]').val("");
                    $('[name="lastname"]').val("");
                    $('[name="email"]').val("");
                   $('[name="contact"]').val("");
                   $('[name="address"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_user();
                  } 
                }
            });
            return false;
        });
 




















        $('#show_data').on('click','.item_view',function(){
          
         
          
          
          
          
          
          var id = $(this).data('id');
            var firstname = $(this).data('firstname');
            var lastname = $(this).data('lastname');
            var email = $(this).data('email');
            var contact = $(this).data('contact');
            var address = $(this).data('address');











            $('#Modal_view').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="firstname_edit"]').val(firstname);
            $('[name="lastname_edit"]').val(lastname);
            $('[name="email_edit"]').val(email);
            $('[name="contact_edit"]').val(contact);

            $('[name="address_edit"]').val(address);
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        
          
          var id = $(this).data('id');
            var firstname = $(this).data('firstname');
          
         
           








            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/user_data')?>",
                dataType : "JSON",
                data : {id:id, firstname:firstname},
                success: function(data){
                 console.log(data);
                }
            });
          
    

        });












/*
    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
   

*/














        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var firstname = $(this).data('firstname');
            var lastname = $(this).data('lastname');
            var email = $(this).data('email');
            var contact  = $(this).data('contact');
            var address = $(this).data('address');
             
            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="firstname_edit"]').val(firstname);
            $('[name="lastname_edit"]').val(lastname);

            $('[name="email_edit"]').val(email);
            $('[name="contact_edit"]').val(contact);
            $('[name="address_edit"]').val(address);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var firstname = $('#firstname_edit').val();
            var lastname  = $('#lastname_edit').val();
            var email    = $('#email_edit').val();
            var contact   = $('#contact_edit').val();
            var address   = $('#address_edit').val();
            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
            var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            var dataJson = { [csrfName]: csrfHash,id:id , firstname:firstname, lastname:lastname,email:email, contact:contact, address:address};
            

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/update')?>",
                dataType : "JSON",
                //data : {id:id , firstname:firstname, lastname:lastname},
                data:dataJson,
                success: function(data){

                 if(data.error)
                    {
                      

                        if(data.firstnameEDErr != '')
                        {
                          $('#firstnameEDErr').html(data.firstnameEDErr);
                        }
                        else
                        {
                          $('#firstnameEDErr').html('');
                        }


                        if(data.lastnameEDErr != '')
                        {
                          $('#lastnameEDErr').html(data.lastnameEDErr);
                        }
                        else
                        {
                          $('#lastnameEDErr').html(''); 
                        }


                        if(data.emailEDErr != '')
                        {
                          $('#emailEDErr').html(data.emailEDErr);
                        }
                        else
                        {
                          $('#emailEDErr').html(''); 
                        }

                        if(data.contactEDErr != '')
                        {
                          $('#contactEDErr').html(data.contactEDErr);
                        }
                        else
                        {
                          $('#contactEDErr').html(''); 
                        }
                        
                        if(data.addressEDErr != '')
                        {
                          $('#addressEDErr').html(data.addressEDErr);
                        }
                        else
                        {
                          $('#addressEDErr').html(''); 
                        }
                   





                   } 


                   if(data==true){
                    $('[name="id_edit"]').val("");
                    $('[name="firstname_edit"]').val("");
                    $('[name="lastname_edit"]').val("");
                    $('[name="email_edit"]').val("");
                   
                    $('[name="contact_edit"]').val("");
                    $('[name="address_edit"]').val("");
                   
                   
                    $('#Modal_Edit').modal('hide');
                    show_user();
                   }

                }
            });
            return false;
        });
 
     
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });
 
    
         $('#btn_delete').on('click',function(){
            var id = $('#id_delete').val();

            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
            var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
            var dataJson = { [csrfName]: csrfHash,id:id };
            

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/delete')?>",
                dataType : "JSON",
                //data : {id:id},
                data:dataJson,
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_user();
                }
            });
            return false;
        });
 
    });
 
</script>
</body>
</html>