 <!-- Masthead-->
 <header class="masthead">
   <div class="container h-100">
     <div class="row h-100 align-items-center justify-content-center text-center">
       <div class="col-lg-10  mb-4">
         <h1 class="text-uppercase font-weight-bold">About Us</h1>
         <hr class="divider my-4" />
       </div>

     </div>
   </div>
 </header>

 <section class="page-section">
   <div class="container">
     <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>

   </div>
 </section>