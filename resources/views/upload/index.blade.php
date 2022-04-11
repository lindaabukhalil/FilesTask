<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Document</title>
    </head>
    <body class="" style="background-image:linear-gradient(90deg,#0d261a,#53c68c, #b3e6cc);">
        <div class="class container">
            <div class="class row">
                <div class="class col-md-10" style="color: white;">
                    <h1 style="color: white; text-shadow: 0 0 6px #FF0000, 0 0 8px #0000FF">Upload Your Files Online</h1>
                </div>
            </div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif @if(Session()->has('success'))
            <div class="alert alert-success">
                {{ Session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="class row mt-100">
                <div class="card" style="width: 20rem;  height: 26rem;; margin-top: 100px; left:35%; background-color: lightgray; border-color: black;">
                    <div class="card-body">
                        <div class="" style="display: flex; justify-content: space-around;">
                            <i class="fa fa-plus-circle" id="add" style="font-size: 48px; color: #007bff;"></i>

                            <div>
                                <h5 class="card-title" style="color:white;text-shadow: 0 0 3px #FF0000, 0 0 4px #0000FF">Upload File</h5>
                               
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="class form-group">
                                <input type="file" id="file" name="file" style="display: none;" />

                                <input class="form-control" name="title" type="text" placeholder="title" />
                            </div>
                            <div class="class form-group">
                                <textarea class="form-control" name="message" placeholder="message"></textarea>
                            </div>
                            <input type="radio" name="send" id=""  /> send email transfer

                            <div>
                                <div class="class form-group">
                                    <div style="display: flex; justify-content: space-between; margin-top: 13px;">
                                        <br><br>
                                        <button type="submit" class="btn btn-primary" style="color: #fff; background-color: gray; border-color: black; width: 60%; border-radius: 23px;">Get Link</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("add").addEventListener("click", function (e) {
                document.getElementById("file").click();
            });
            document.getElementById("addlabel").addEventListener("click", function (e) {
                document.getElementById("file").click();
            });

            window.setTimeout(function () {
                $(".alert").alert("close");
            }, 5000);
        </script>
    </body>
</html>
