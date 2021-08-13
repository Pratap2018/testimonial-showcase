<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/addcss.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Write Testimonial</title>
</head>

<body>
    <div class="container">

        <div class=" text-center mt-5 ">
        
        
        
            <h1>Your Opinion Matters to Us</h1>
        </div>
        <form action="/p" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form id="contact-form" role="form">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_name">Firstname *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" data-error="Firstname is required.">
                                                    @error('name')
                                                    <div class="alert alert-danger" role="alert">
                                                        Name Required
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_lastname">Lastname *</label>
                                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" data-error="Lastname is required.">
                                                    @error('surname')
                                                    <div class="alert alert-danger" role="alert">
                                                        Surname Required
                                                    </div>
                                                    @enderror


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="designation">Designation *</label>
                                                    <input id="form_designation" type="text" name="designation" class="form-control" placeholder="Please enter your Designation *">
                                                    @error('designation')
                                                    <div class="alert alert-danger" role="alert">
                                                        Designation Required
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_rating">Rate your experience
                                                        *</label> <select id="form_rating" name="rating" class="form-control">
                                                        <option value="" selected disabled>Your Rating matters to us
                                                        </option>
                                                        <option>5</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    @error('rating')
                                                    <div class="alert alert-danger" role="alert">
                                                        Rating Required
                                                    </div>
                                                    @enderror</div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="file" id="image" onchange="myFile()">
                                                    
                                                    <label class="custom-file-label" for="image" ><span id="demo">Upload Your Profile Picture</span></label>
                                                </div>
                                                @error('file')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                              </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="form_message">Write Your thoughts
                                                        
                                                        </label> <input id="message-title" name="message_title" class="form-control" placeholder="Message Title"></input> </div>
                                                        @error('message_title')
                                                        <div class="alert alert-danger" role="alert">
                                                            {{$message}}
                                                      </div>
                                                        @enderror
                                                    </div>
                                            
                                            
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="form_message">Write Your thoughts
                                                        about
                                                        us *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your thoughts here." rows="4"></textarea> </div>
                                                        @error('message')
                                                        <div class="alert alert-danger" role="alert">
                                                            Write Your Experience 
                                                      </div>
                                                        @enderror
                                                        @if(session('success'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{session('success')}}
                                                          </div>
                                                    
                                                    @endif
                                                </div>
                                            <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Send Message">
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.8 -->
                </div> <!-- /.row-->

            </div>
        </form>
    </div>
    <script>
        function myFile() {
          var x = document.getElementById("image").value;
          document.getElementById("demo").innerHTML = x;
          
        }
        </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>
<style>
    .btn {
        background-color: orangered;
        border-color: orangered;
    }

    h1 {
        font-weight: bold;
        color: black;
    }

</style>

</html>
