


 @extends('layoute.barmenu')
 @section('content')
 		


 @extends('layoute.barmenu')
 @section('content')
 				  <form  action="{{Route('assurence.store')}}" method="POST">
                      {{ csrf_field()}}
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter  Region </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
		
				 <div class="form-group">
                  <label for="exampleInputEmail1">Nom Region</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_assurence' placeholder="Enter nom">
                </div>
					
				
					
						<div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">  
				  <i class="fa fa-envelope"></i> </div>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='gmail_assurence' placeholder="Enter email">
                </div>

			
		       </div>
				
           
			
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			
				 <div class="form-group">
                  <label for="exampleInputEmail1">Adress Region</label>
                  <input type="text" class="form-control" id="exampleInputl" name='adress_assurence' placeholder="Enter Adress">
                </div>
			
              <div class="form-group">
			  
			 
				<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control"  name="tele_assurence" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                </div> 
				</div>


				
			  
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default">Reset</button>
              </div>        
		</form>
      </div>
				
				
				
				
				
				
			
 @endsection('content')