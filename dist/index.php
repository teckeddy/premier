<?php
include 'header.php';


?>
<main class="main containerd">
<section class="hero">

</section>
<div class="hero_text container">
    <h1 class="hero-heading">do you want to learn how to drive?</h1>
    <p class="lead">You are at the place where quality training is offered</p>
</div>
<section class="find-courses">
    <div class="course-heading">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
</svg><p class="lead"><span>Find Driving Course</span>/Best offer for your</p>
    </div>

    <div class="courses-form">
    <form class="row g-3">
    <div class="col-md-4">
            <label for="inputCity" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
            <label for="inputState" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="inputCity" required>
            </div>
            <div class="col-md-4">
            <label for="inputZip" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="inputZip" required>
            </div>
            <div class="col-md-4">
            <label for="inputState" class="form-label">Class</label>
            <select id="inputState" class="form-select" required>
                <option selected>Choose...</option>
                <option>Begginer</option>
                <option>Refresher</option>
                <option>Instructor</option>
            </select>
            </div>
           
            <div class="col-md-4">
            <label for="inputState" class="form-label">Branch</label>
            <select id="inputState" class="form-select" required>
                <option selected>Choose...</option>
                <option>Ruiru Matangi Kimbo</option>
                <option>Kairu-DICII</option>
                <option>GITHURAI 44</option>
                <option>GITHURAI 45</option>
                <option>UMOJA</option>
            </select>
            </div>
            <div class="col-md-4">
            <label for="inputZip" class="form-label">When to join</label>
            <input type="date" class="form-control" id="inputZip" required>
            </div>
           
            <div class="col-12">
            <button type="submit" class="btn btn-danger">Apply Now</button>
            </div>
</form>
    </div>

</section>
</main>

   
<?php
include 'footer.php';

?>
</html>