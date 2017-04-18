<?php include '../partials/header.php'; ?>
<!-- Botbooker Modal -->
<div class="container">
  <h4 class="text-center">RU SafeSpace</h4>
  
   <div class="row">
        <div class="col-md-8 modal-description">
           <h4>Project Description</h4>
            <p>SafeSpace is a house-sharing application for the students of Rutgers University to share their on campus living space temporarily with guests who are in need of a place to stay due to unforseen circumstances. Whether they be commuters working on late night projects or students who simply do not want to risk walking back to their home very late at night, SafeSpace accomodates any emergency for any and all students. Users have the ability to login via their Facebook accounts and perform CRUD operations on their listing (only one listing per user). Other users can then comment on their listing and view their listing on Google Maps via the Google Maps API. The listing data is stored using the NoSQL-based MongoDB API, allowing for instant updating whenever a listing is changed/removed.</p>
            <p>
              <small><strong>Student Listings View</strong></small>
              <img class="modal-img img-responsive" src="../../img/portfolio/safespacehome.png" alt="SafeSpace home screen">
            </p>
            <p>This project was completed with one other student developer as part of our senior capstone project in the Fall of 2015, which was our last semester of college. After presenting our app to other members of our senior capstone class, it was met with positive reviews and, therefore, we decided to deploy our app to give other Rutgers students living on campus the chance to help other students in need. The first beta version was released in September 2015, and after the first two weeks, the app received 2000 page views and over 50 unique listings from students. As of January 2016, 100 commuters have avoided late night driving and successfully improved their sleeping habits.</p>
        </div>
        <div class="col-md-4 modal-features">
           <h4>Project Features</h4>
            <ul>
                <li>Facebook Login</li>
                <li>Address View on Google Maps</li>
                <li>Firebase API</li>
                <li>Listing Comments</li>
            </ul>
        </div>
    </div>
  <div class="portfolio-footer">
    <a href="https://safespace2015.herokuapp.com" class="modal-btn btn btn-primary" target="_blank">See it Live</a>
    <a class="btn btn-default" href="/#at-portfolio">Go Back</a>
  </div>
</div>
<?php include '../partials/footer.php'; ?>