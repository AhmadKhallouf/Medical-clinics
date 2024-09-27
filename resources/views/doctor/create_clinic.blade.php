<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book appointments at medical clinice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>

<body>

    <div class="container fs-5" style="width: 900px;height:750px;background:linear-gradient(45deg,#ffe0c3,rgb(202, 122, 23));border-radius: 20px;margin-top:100px;">
        <form method="POST" action="{{ route('create_clinic') }}" enctype="multipart/form-data">
            @csrf
            <div class="dropdown">
                <select id="dropdown" name="medical_specialty" class="btn btn-secondary dropdown-toggle mt-5" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <option class="dropdown-item">Medical_specialty</option>
                    <option value="dental" class="dropdown-item">Dental clinic</option>
                    <option value="women" class="dropdown-item">Women's clinic</option>
                    <option value="cosmetic" class="dropdown-item">Cosmetic clinic</option>
                    <option value="children" class="dropdown-item">Children's clinic</option>
                    <option value="eye" class="dropdown-item">Eye clinic</option>
                    <option value="ear_nose_and_throat" class="dropdown-item">Ear,nose and throat clinic</option>
                    <option value="dermatology" class="dropdown-item">Dermatology clinic</option>
                    <option value="x_ray" class="dropdown-item">X-ray clinic</option>
                    <option value="psychiatric" class="dropdown-item">Psychiatric clinic</option>
                    <option value="orthopedic_surgery" class="dropdown-item">Orthopedic surgery clinic</option>
                    <option value="physical_therapy" class="dropdown-item">Physical therapy clinic</option>
                    <option value="forensic" class="dropdown-item">Forensic clinic</option>
                  </select>
           

        </div>

            <label class="form-label mt-5">Address :</label>
            <input type="text" name="address"><br>
            <label class="form-label mt-4">Description :</label>
            <textarea  name="description" maxlength="1000" required cols="40" rows="5"></textarea><br>
            <label class="form-label mt-4">Inspection cost :</label>
            <input type="number" name="inspection_cost"> $<br>
            <label class="form-label mt-4">Inspection time :</label>
            <input type="number" name="inspection_time">minute<br><br>
            <div id="imageRows">
                <div class="imageRow">
                 first image befor therapy <input type="file" name="before_images1" accept="image/*" required><br>
                 first image after therapy <input type="file" name="after_images1" accept="image/*" required><br><br><br>
                </div>
              </div>
              <div id="imageRows">
                <div class="imageRow">
                    second image befor therapy <input type="file" name="before_images2" accept="image/*" required><br>
                    second image befor therapy <input type="file" name="after_images2" accept="image/*" required><br>
                </div>
              </div>
            <input type="submit"style="width: 100px;margin-top:10px;border-radius:5px;">
        </form>
        </div>   
    
 


  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>  
</body>