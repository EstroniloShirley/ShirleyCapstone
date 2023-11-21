<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Book Appointment Form</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
          <div class="col-12"> <x-application-logo class="block self-center	 h-9 w-auto fill-current  text-gray-800 dark:text-gray-200" />
          </div>
          <div class="col-12">
            <h3
              class="mt-4 fw-bold text-center text-secondary fs-4 text-uppercase mb-1"
            >    
              Appointment form
            </h3>
            <h5 class="fw-bold text-center text-secondary fs-s mb-10">
              Tuesday: For Pre-natal Check-up
            </h5>
           
          </div>
          <form method="post" action="{{route('appointments.store')}}">
            @csrf 
           
            <div class="row g-3">
              <div class="col-md-6">
                <h6 class="ml-1 mt-3"> First Name<span class="text-red-500"> *</span></h6>
                <input
                  type="text"
                  name="first_name"
                  class="form-control"
                  placeholder="Juan"
                  pattern="[A-Z\sa-z]{3,20}"
                  required
                />@error('first_name')
                <span class="text-red-500">{{$message}}</span>
              @enderror
              </div>

              <div class="col-md-6"><h6 class="ml-1 mt-3"> Middle Name (optional)</h6>
                <input
                  type="text"
                  name="middle_name"
                  class="form-control"
                  placeholder="Dela"
                  pattern="[A-Z\sa-z]{3,20}"
              
                />
              </div>
              <div class="col-md-8"><h6 class="ml-1 mt-3"> Last Name<span class="text-red-500"> *</span></h6>
                <input
                  type="text"
                  name="last_name"
                  class="form-control"
                  placeholder="Cruz"
                  pattern="[A-Z\sa-z]{3,20}"
                  required
                />
              </div>
              <div class="col-md-4"><h6 class="ml-1 mt-3"> Suffix (optional)</h6>
                <input
                  type="text"
                  name="suffix_name"
                  class="form-control"
                  placeholder="Jr./Sr. etc."
                  pattern="[A-Z\sa-z]{2,10}"
                />
              </div>
              <div class="col-md-8"><h6 class="ml-1 mt-3">Date of Birth<span class="text-red-500"> *</span></h6>
                <input
                  type="date"
                  class="form-control"
                  placeholder="Date of Birth"
                  name="birth_date"
                  required
                />
              </div>

              <div class="col-4"><h6 class="ml-1 mt-3">Gender<span class="text-red-500"> *</span></h6>
                <select
                  class="form-select"
                  name="gender"
                  required
                >
                  
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
              <div class="col-md-8"><h6 class="ml-1 mt-3">Home Address<span class="text-red-500"> *</span></h6>
                <input
                  type="text"
                  name="address"
                  class="form-control"
                  placeholder="212 Zone 3, Barangay Sta. Ignacia, Tarlac City"
                  required
                />
              </div>
              
              <div class="col-md-4"><h6 class="ml-1 mt-3">Mobile Number<span class="text-red-500"> *</span></h6>
                <input
                  type="tel"
                  name="phone"
                  class="form-control"
                  placeholder="09121234247"
                  pattern="[0]{1}[9]{1}[0-9]{9}"
                  max="11"
                  required
                />
              </div>
            
            

              <div class="col-12"> <h6 class="mt-3">
                Appointment Concern Details<span class="text-red-500"> *</span>
              </h6>
                <textarea
                  class="form-control"
                  name="concern"
                  placeholder="Describe your appointment concern"
                  required
                ></textarea>
              </div>
              <div class="col-12 mt-5 mb-4">
                <input
                  type="submit"
                  value="Book this Appointment"
                  class="btn bg-green-500 fw-bold text-white float-end hover:bg-green-400"
                

                />
                <button
                  type="cancel"
                  class="btn bg-red-500 fw-bold text-white float-end hover:text-white me-2 hover:bg-red-400"
                >
       Cancel
               </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
