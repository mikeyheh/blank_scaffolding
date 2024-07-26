<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
            background-color: black;
            color: white; /* This makes the default text color white */
        }

        .container {
            background-color: white;
            color: black; /* Ensure text inside the container is black */
            padding: 20px; /* Optional: Add some padding for better appearance */
            border-radius: 5px; /* Optional: Rounded corners */
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1); /* Optional: Add some shadow */
        }

        .table {
            background-color: white;
        }

        .table th, .table td {
            color: black; /* Text color inside the table */
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestourage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color:black;">
<img src="\img\web_elements\gesto.png" alt="Gestourage Logo" style="width: 100%; max-height: 400px; object-fit: cover;" class="product-image">
    <div class="container" >
        
        
        <hr>

        <div class="row py-2">
            <div class="col-md-6">
                
            </div>
    
            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="/search">
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>

        

         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Last Modified</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>

         @foreach ($posts as $post)
        
              <tr>
                <td><img src="{{ $post->prodImageURL }}" alt="Category Image" style="max-width: 100px; max-height: 100px;"></td>
                <td>{{ $post->ProdName }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->prodLastModified }}</td>
                <td>{{ $post->description }}</td>
              </tr>
              
             @endforeach
            </tbody>
          </table>
        
    </div>
   
</body>
</html>