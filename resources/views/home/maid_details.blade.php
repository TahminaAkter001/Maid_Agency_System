<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maid Details</title>
    <!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--fontawesome--->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @include('home.header')
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav li {
    display: inline-block;
    margin-right: 20px;
}

nav li a {
    color: #fff;
    text-decoration: none;
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

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}
    </style>

    <section class="maid-details">
        
        <div class="maid-photo">
            <img src="../Maid/{{ $post->image}}" alt="Maid Photo">
        </div>
        <div class="maid-info">
            <h2>{{ $post->name}}</h2>
            <p><strong>Age:</strong> {{ $post->age}}</p>
            <p><strong>Nationality:</strong> {{ $post->nationality}}</p>
            <p><strong>Experience:</strong> {{ $post->experience}}</p>
            <p><strong>Salary:</strong> {{ $post->salary}}</p>
            <p><strong>Contact No:</strong> {{ $post->contact}}</p>
            <p><strong>NID No:</strong> {{ $post->nid}}</p>
            <h4>Description</h4>
            <p>{{ $post->details}}</p>
        </div>
        
    </section>
    <section class="reviews">
        <h2>Customer Reviews</h2>
        <div class="review">
            <div class="rating">4.5</div>
            <p class="comment">The maid was excellent. Very efficient and polite. Highly recommended!</p>
            <p class="date">Posted on July 28, 2023</p>
        </div>
        <!-- Add more review cards as needed -->
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
    <footer>
        <p>&copy; 2023 Your Agency. All rights reserved.</p>
    </footer>


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