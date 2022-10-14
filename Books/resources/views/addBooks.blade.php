<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="constant w-25 d-flex justify-content-center">
        <form action="/store" method="POST">
           
    @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">book title</label>
              <input name = "book_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
              
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">book description</label>
                <input name = "book_description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">book author</label>
                <input name = "book_author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">image</label>
              <input  name = "book_image"type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            {{-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}<br>
            <button type="submit" class="btn btn-primary">Add Books</button>
            
          </form>
        </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>