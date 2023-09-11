<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link rel="stylesheet" href="<?php echo site_url();?>assets/login.css">
  <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url();?>assets/toast/toast.js"></script>
 <script>
        function toggleForm() {
        var container = document.querySelector(".container");
        container.classList.toggle("active");
      }
 </script>
   <style>
        .my-button {
            width: 100px;
            text-decoration: none;
            font-family: 'Inter';
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            text-align: center;
            transition-duration: 0.3s;
            transition-property: all;
            transition-timing-function: ease;
            margin: 0.75rem 0;
            border: 1px dashed black;
            color: black;
            
        }

        .my-button:hover {
            border: 1px solid #f3f3f3;
            background: black;
            color: white;
        }
    </style>

</style>

 </head>









 <body>
    <section>
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx"><img src="https://images.unsplash.com/photo-1623998021722-b934f73081df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" /></div>
          <div class="formBx">
            
            < <?php echo form_open('Auth/login_form'); ?>
            <h2>Sign In</h2>
              <input id="email" id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required autofocus>
              <input id="password" type="password" name="password" placeholder="password" required>
              <button type="submit" name="" class="my-button">Login</button>
              
              <p class="signup">
                Don't have an account ?<a href="<?php echo site_url();?>Auth/register" >
                  Sign Up
                </a>
              </p>
              <?php echo form_close(); ?>
           
          </div>
        </div>
        
    </section>

    <script>
	<?php if($this->session->flashdata('suc')){ ?>
    toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
<?php }else if($this->session->flashdata('wrong')){  ?>
    toastr.error("<?php echo $this->session->flashdata('wrong'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
<?php
	$this->session->unset_userdata ( 'suc' ); ?>
	
	<?php
    $this->session->unset_userdata ( 'wrong' ); ?>

</script>
</body>
</html>
 
  












