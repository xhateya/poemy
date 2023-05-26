<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <title>Add Poem</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body{
        background: var(--primary-color);
    }
    h2{
        color:var(--main-color);
    }
    :root{
    --primary-color:#EEDFC2;
    --secondary-color:#000;
    --main-color:#780001;
    --shadow-color:rgba(0,0,0, .2);
    --white-color:#fff;
    --text-color:#000;

}
    </style>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>New Piece</h2>
                </div>
                <div class="pull-right">
                    <a class="btn  btn-dark" href="{{ url('/poetry') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{session( 'status') }}
        </div>
        @endif
        <form action="{{  url("/poetry") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>poem title:</strong>
                        <input type="text" name="title" 
                        class="form-control" placeholder="poem title">
                        @error( 'title' )
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>poem piece:</strong>
                        <input type="text" name="piece" 
                        class="form-control" placeholder="poem piece">
                        @error( 'piece' )
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>poem author:</strong>
                        <input type="text" name="author" 
                        class="form-control" placeholder="poem author">
                        @error( 'author' )
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>poem image:</strong>
                        <input type="file" name="image" 
                        class="form-control" placeholder="poem image">
                        @error( 'image' )
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-dark ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

                
                    


