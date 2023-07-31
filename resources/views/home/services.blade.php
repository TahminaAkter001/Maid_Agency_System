<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!----font awesome cdn--->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


   
</head>

<body>

   <style>
      body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #2196F3;
}

.mt-50{

    margin-top: 50px;
}

.mb-50{

    margin-bottom: 50px;
}



.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .1875rem;
}

.card-img-actions {
    position: relative;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center;
}

.card-img{

    width: 350px;
}

.star{
        color: red;
}
.heading{
    color:white;
    text-align:center;
    font-family: 'Poppins', sans-serif;
}

.bg-cart {
    background-color:orange;
    color:#fff;
}

.bg-cart:hover {
    
    color:#fff;
}

.bg-buy {
    background-color:green;
    color:#fff;
    padding-right: 29px;
}
.bg-buy:hover {
    
    color:#fff;
}

a{

    text-decoration: none !important;
}
.star{
    color:yellow;
    font-size:17px;
}
   </style>
<h1 class="heading">Products in {{ $service->name }}</h1>
<div class="container d-flex justify-content-center mt-50 mb-50">

        <div class="row">
            @foreach($post as $post)
           <div class="col-md-4 mt-2">
           
                
<div class="card">
   <div class="card-body">
      <div class="card-img-actions">
     <img src="../Maid/{{ $post->image}}" width="240" height="250" alt="">
     </div>
       </div>
           <div class="card-body bg-light text-center">
         <div class="mb-2">
          <h6 class="font-weight-semibold mb-2">
             <a href="#" class="text-default mb-2" data-abc="true">{{ $post->name}}</a>
                </h6>
                 </div>

                  <h3 class="mb-0 font-weight-semibold">{{ $post->salary}} Taka</h3>
                 <div>
                 <i class="fa fa-star star"></i>
                 <i class="fa fa-star star"></i>
                    <i class="fa fa-star star"></i>
                    <i class="fa fa-star star"></i>
                 </div>
           <div class="text-muted mb-3">34 reviews</div>
           
             <button type="button" class="btn bg-cart"></i><a href="{{ route('home.maid_details', ['id' => $post->id]) }}"> Details</a></button>
            
            
            </div>
                     </div>
                     </div> 

                    @endforeach
 
    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</body>
</html>