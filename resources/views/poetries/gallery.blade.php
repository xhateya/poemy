<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <title>Poem Project</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="css/mycss.css" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
   

 <div class="container mt-2">
    {{-- <div class="add">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Gallery</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ url('/poetry/data/create') }}"> Create Poem</a>  
                </div>
            </div>
        </div>
        <div class="section">




        </div>
    </div> --}}

    <header class="header">
        <a href="#" class="logo">Garden of <span>Words</span></a>
        <nav class="navbar">
            <a href="poetry" style="--i:4;" >Home</a>
            <a href="poetry#about" style="--i:5;" >About</a>
            <a href="#poem" style="--i:6;" >Poem</a>
            <a href="gallery" style="--i:7;" class="active">Gallery</a>
            
           
        </nav>
            <div class='bx bx-moon' id="darkMode-icon"></div>
            <div class='bx bx-menu' id="menu-icon"></div>

    </header>

    
    <section class="about" >
        {{-- <div class="about-img">
            <img src="images/heh.jpeg" alt="">
        </div> --}}
        <div class="about-content">
            <h2 class="heading">Garden of <span>Words</span></h2>
            <p>Create Your own poet and embrace it to the world</p>
            {{-- <a class="btn btn-success" href="{{ url('/poetry/data/create') }}"> Create Poem</a>  --}}
        </div>
      </section>


        <section class="add-new" id="add-new">
            <div class="add-box">
                <div class="add-content">
                    <a class="btn btn-success" href="{{ url('/poetry/data/create') }}"> Create Poem</a> 
                </div>
            </div>
        </section>
         
        
        @foreach ($data as $item)
        <div class="wrap">
            <div class="box" style="--clr:#009688;"{{ $item->id }}>
                <div class="imgBx" >
                    <img src="/images/{{ $item->image }}" width="100px">
                </div>
                <div class="content">
                    <h2> {{ $item->title }} </h2>
                    <p>{{ $item->piece }}</p>
                    <h3>{{ $item->author }}</h3>
                    {{-- route aksi untuk hapus --}}

                    <form action="{{ url("/poetry/$item->id") }}" method="Post">
                        {{-- route aksi untuk edit--}}
                        <a class="btn btn-primary" href="{{ url("/poetry/$item->id/edit") }}">Edit</a>
                            @csrf
                            @method ( 'DELETE' )
                            <button type="Submit" class="btn btn-primary">Delete</button>
                          </form>
                        </td>
                    </tr>
                   
                </div>
            </div>
            
        </div>
    <form action="{{ url("/poetry/$item->id") }}" method="Post">
        
        @endforeach 

        <br>
        {{ $data->links ('pagination::bootstrap-5')}}



                 

        
      </body>
      <script src="js/myjs.js"></script>
      <script src="https://unpkg.com/scrollreveal"></script>
    
</html>


