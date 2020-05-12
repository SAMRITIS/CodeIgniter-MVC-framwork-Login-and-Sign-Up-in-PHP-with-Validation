
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <?php $attributes = array('class' => 'form-horizontal'); 
    echo form_open('http://[::1]/demo/index.php/welcome/xxx'); ?>
     
     <div class="form-group">
    <label class="control-label col-sm-2" >Name:</label>
    <div class="col-sm-10">
   <?php $datw = array(
        'name'          => 'nam',
        'id'            => 'name',
        'class'         => 'form-control',
        'placeholder'   => 'Enter Name',
);

echo form_input($datw); ?>
      
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
   <?php $data = array(
        'name'          => 'emai',
        'id'            => 'email',
        'class'         => 'form-control',
        'placeholder'   => 'Enter email',
);

echo form_input($data); ?>
      
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mobile">Mobile:</label>
    <div class="col-sm-10">
    <?php $dat = array(
        'name'          => 'mobil',
        'id'            => 'pwd',
        'class'         => 'form-control',
        'placeholder'   => 'Enter Mobile No',
);

echo form_input($dat); ?>
      
      
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
  <?php 
   $date = array('class' => 'btn btn-default',); 
    echo form_submit('submit', 'Submit Post!',$date);?>
      </div>
  </div>
</form>
  <?php  echo validation_errors();
        
  ?>
  
  </body>
</html>