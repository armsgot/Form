<?php
$title = 'Index';
require_once 'includes/header.php'
?>
  <body>
    <h1 class="text-center" style="color:white">Registration for IT Conference</h1>
    <br>  
    <form>

        <div class="form-group">
          <label for="InputFirstName">First Name</label>
          <input type="name" class="form-control" id="InputFirstName">
        </div>

        <div class="form-group">
          <label for="InputLastName">Last Name</label>
          <input type="name" class="form-control" id="InputLastName">
        </div>

        <div class="form-group">
          <label for="DateofBirth">Date of Birth</label>
          <input type="date" id="date">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Specialty</label>
        </div>
          <select class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          </select>
          <select class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          </select>
          <select class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Database Admin</option>
          <option value="2">Software Developer</option>
          <option value="3">Web Administrator</option>
          </select>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Other Specialty:</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="form-group">
          <label for="ContactNumber">Contact Number</label>
          <input type="number" class="form-control" id="InputFirstName">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
      <marquee behavior="" direction="right"><img src="alien.gif" alt="" height="100"></marquee>
<?php require_once 'includes/footer.php'?>