<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>BLOG</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">e
     <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                              Dropdown
                         </a>
                         <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li>
                                   <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
               </ul>
               <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
          </div>
     </div>
</nav>
<div class="container">
     <div class="row g-6 align-items-center">
          <form method="post" action="controller/Register_POST.php">
               <div class="mb-4 col-auto">
                    <label for="first-name" class="col-form-label">FIRST NAME</label>
                    <input type="text" class="form-control" id="first-name" name="First_Name">
               </div>
               <div class="mb-4 col-auto">
                    <label for="last-name" class="col-form-label">LAST NAME</label>
                    <input type="text" class="form-control" id="last-name" name="Last_Name">
               </div>
               <div class="mb-4 col-auto">
                    <label for="" class="col-form-label">GENDER</label>
                    <div class="mb-2 form-check">
                         <input class="form-check-input" type="radio" name="gender" id="female_radio">
                         <label class="form-check-label" for="female_radio">
                              Female
                         </label>
                    </div>
                    <div class="mb-2 form-check">
                         <input class="form-check-input" type="radio" name="gender" id="male_radio" checked>
                         <label class="form-check-label" for="male_radio">
                              Male
                         </label>
                    </div>
               </div>
               <div class="mb-4 col-auto">
                    <label for="address" class="col-form-label">ADDRESS</label>
                    <textarea class="form-control" id="address" rows="3" name="Address"></textarea>
               </div>

               <div class="mb-4 col-auto">
                    <label for="email" class="col-form-label">EMAIL</label>
                    <input type="email" class="form-control" id="email" name="Email">
               </div>
               <div class="mb-4 col-auto">
                    <label for="phone" class="col-form-label">PHONE</label>
                    <input type="text" class="form-control" id="phone" name="Phone">
               </div>
               <div class="mb-4 col-auto">
                    <label for="password" class="col-form-label">PASSWORD</label>
                    <input type="password" class="form-control" id="password" name="Password">
               </div>
               <div class="mb-4 col-auto">
                    <label for="COUNTRY" class="col-form-label">COUNTRY</label>
                    <select class="form-control" name="Country" id="COUNTRY">
                         <option value="Egypt" selected>Egypt</option>
                         <option value="iraq">iraq</option>
                         <option value="United Arab Emirates">United Arab Emirates</option>
                         <option value="Saudi Arabia">Saudi Arabia</option>
                         <option value="Rosia">Rosia</option>
                    </select>
               </div>
               <div class="mb-4 col-auto">
                    <label for="department" class="col-form-label">DEPARTMENT</label>
                    <input type="password" class="form-control" id="department" name="Department">
               </div>
               <div class="mb-4 col-auto">
                    <label class="mb-3 col-form-label" for="">SKILLS</label>
                    <div class="mb-3 form-check">
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="php" name="list[]" value="php">
                              <label class="form-check-label" for="php">PHP</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="c#" name="list[]" value="c-sharp">
                              <label class="form-check-label" for="c#">C#</label>
                         </div>
                    </div>
                    <div class="mb-3 form-check">
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="c+" name="list[]" value="C-pls pls">
                              <label class="form-check-label" for="c+">C++</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="html" name="list[]" value="html">
                              <label class="form-check-label" for="html">HTML</label>
                         </div>
                    </div>
               </div>
               <div class="mb-3 form-check">
                    <label for="confirmation" class=""> </label>
                    <input type="text" class="form-control" name="confirmation" id="confirmation">
               </div>
               <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Confirm</button>
               </div>
          </form>
     </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>