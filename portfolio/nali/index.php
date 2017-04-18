<?php include '../partials/header.php'; ?>
<!-- Botbooker Modal -->
<div class="container">
  <h4 class="text-center">Nali Friend-Finder App</h4>
   <div class="row">
        <div class="col-md-8 modal-description">
         <h4>Project Description</h4>
          <p>Nali is an iOS app that allows users to find their friends using a real-time GPS system. Unlike the default find my friend apps on the app store, Nali tracks the friend's location as they are moving, without having to refresh itself. Working like an actual compass, the user can follow the arrow's pointer to their friend's location without having to worry about their friend changing position.</p>
          <p>
            <small><strong>Nali App Home Screen</strong></small>
            <img class="modal-img img-responsive" src="../../img/portfolio/nalilaunch.jpg" alt="Nali launch screen">
          </p>
          <p>By taking advantage of the Apple Maps API connecting with a MongoDB database that stores the user's location, Nali works even if the user's phone is turned off, since their last known location is saved. I worked on this app with three other developers during the Yale University Hackathon, and our goal was to improve the user experience of friend finder apps by providing real-time updates to friend locations. To achieve this, the Swift language was used to connect to the Maps API and our own Node server, which connects to MongoDB and provides a bridge between the user interface and the location data.</p>
      </div>
      <div class="col-md-4 modal-features">
         <h4>Project Features</h4>
          <ul>
              <li>Apple Maps</li>
              <li>Real-time Compass</li>
              <li>Swift + JavaScript integration</li>
              <li>Push notifications</li>
          </ul>
      </div>
    </div>
  <div class="portfolio-footer">
    <a href="https://devpost.com/software/nali" class="modal-btn btn btn-primary" target="_blank">More Info</a>
    <a class="btn btn-default" href="/#at-portfolio">Go Back</a>
  </div>
</div>
<?php include '../partials/footer.php'; ?>