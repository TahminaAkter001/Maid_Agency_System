<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      @include('home.homecss')
      <title>Maid Details</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
   <body>
      <!-- header section start -->
      
         @include('home.header')

    
    <style>
        h2{
            font-size:28px;
        }
        h4, h6{
            font-size:20px;
        }
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}
section.maid-details {
    display: flex;
    margin: 20px;
}

.maid-photo img {
    max-width: 200px;
    height: auto;
    margin-right: 20px;
}

.maid-info {
    flex: 1;
}

section.reviews {
    margin: 20px;
}

.review {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}

.rating {
    background-color: #f8ce0b;
    color: #333;
    font-weight: bold;
    display: inline-block;
    padding: 5px;
    border-radius: 5px;
}

section.comments {
    margin: 20px;
}

textarea {
    width: 100%;
    height: 100px;
    resize: none;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}
.container{
    width:40%;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}
.appoint{
    margin-top:20px;
}
.btn:not(:disabled):not(.disabled){
    color:black;
    border:#000;
}
.modal-open .modal .modal-content{
    background:#fff;
}
    </style>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Maid Hiring Form</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          
        
        <form  class="form-horizontal" action="{{ url('/add_hirepost')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group row">
  <label class="col-sm-3 form-control-label">Name</label>
  <div class="col-sm-9">
    <input id="inputHorizontalSuccess" type="text" name="name" placeholder="Enter Your Name" class="form-control form-control-success" required><small class="form-text"></small>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 form-control-label">Contact No.</label>
  <div class="col-sm-9">
    <input id="inputHorizontalSuccess" type="text" name="contact" placeholder="Enter Contact number" class="form-control form-control-success" required>
  
</div>
</div>
<div class="form-group row">
  <label class="col-sm-3 form-control-label">Age</label>
  <div class="col-sm-9">
    <input id="inputHorizontalSuccess" type="text" name="age" placeholder="Enter Age" class="form-control form-control-success" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-3 form-control-label">Address</label>
  <div class="col-sm-9">
    <input id="inputHorizontalSuccess" type="text" name="address" placeholder="Enter Address to be hire" class="form-control form-control-success" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-3 form-control-label">Gander</label>
  <div class="col-sm-9">
    <input id="inputHorizontalSuccess" type="text" name="gander" placeholder="Enter gender" class="form-control form-control-success" required>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 form-control-label">National Id</label>
  <div class="col-sm-9">
    <input id="inputHorizontalSuccess" type="text" name="nid" placeholder="Enter you NID no" class="form-control form-control-success" required>
  </div>
  </div>

  <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Note</label>
                        <div class="col-sm-9">
                          <textarea id="inputHorizontalSuccess" type="text" name="note" placeholder="Any note to be added" class="form-control form-control-success"></textarea><small class="form-text"></small>
                        </div>
          </div>


  <div class="form-group row">
                      <label class="col-sm-8 form-control-label">For how many days you want to appoint? </label>
                        
                      </div>
                      <select class="form-select col-sm-4 form-control-label" name="day">
                        <div class="col-sm-9">
                          <option id="inputHorizontalSuccess" type="text" placeholder="Select a Service" class="form-control form-control-success" name="schedule" required></option><small class="form-text"></small>
                          <option>1 Day</option>
                          <option>2 Days</option>
                          <option>7 Days</option>
                          <option>1 Month</option>
                          <option>2 Month</option>
                          <option>3 Month</option>
                          <option>4 Month</option>
                          <option>5 Month</option>
                          <option>1 Year</option>
                         
                        </div>
                        </select>

          
</form>




        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" value="submit" data-dismiss="modal">Submit</button>
      </div>
      </div>
      
    </div>
</div>





<div class="container">
    <section class="maid-details">
     
        <div class="maid-photo">
            <img src="../Maid/{{ $post->image}}" alt="Maid Photo">
        </div>
        <div class="maid-info">
            <h2>{{ $post->name}}</h2>
            <p><strong>Age:</strong> {{ $post->age}}</p>
            <p><strong>Nationality:</strong> {{ $post->nationality}}</p>
            <p><strong>Experience:</strong> {{ $post->experience}}</p>
            <p><strong>Salary:</strong> {{ $post->salary}} Taka</p>
            <p><strong>Contact No:</strong> {{ $post->contact}}</p>
            <p><strong>NID No:</strong> {{ $post->nid}}</p>
            <h4>Description</h4>
            <p>{{ $post->details}}</p>
            <button class="appoint" data-toggle="modal" data-target="#myModal">Appoint</button>
        </div>
        
    </section>
    <section class="reviews">
        <h2>Customer Reviews</h2>
        <div class="review">
            <div class="rating">4.5</div>
            <p class="comment">The maid was excellent. Very efficient and polite. Highly recommended!</p>
            <p class="date">Posted on July 28, 2023</p>
        </div>
          
    </section>
    <section class="comments">
        <h2>Leave a Comment</h2>
        <form>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Your Comment" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>
    </div>
    <footer>
        <p>&copy; 2023 Maid Agency. All rights reserved.</p>
    </footer>
     
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>