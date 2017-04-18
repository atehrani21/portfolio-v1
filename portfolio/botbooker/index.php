<?php include '../partials/header.php'; ?>
<!-- Botbooker Modal -->
<div class="container">
  <h4 class="text-center">Botbooker Chat Bot</h4>
  
   <div class="row">
        <div class="col-md-8 modal-description">
           <h4>Project Description</h4>
            <p>Botbooker is an application that allows users to book hair salon appointments with the assistance of a chat bot. The user simply logs in to Facebook Messenger and opens a chat with botbooker, the name of our chatbot. Botbooker then asks the user for appointment times and salon specialists that work best for them, and with that, sets up their appointment. The new booking is then added to a live database that notifies the hair salon of a new booking.</p>
            <p>
              <small><strong>Chatting with Botbooker</strong></small>
              <img class="img-responsive" width="550" src="../../img/portfolio/botbooker.gif" alt="Botbooker App Home">
            </p>
            <p>Natural Language Processing, specifically Python's NLTK library, was also utilized as an efficient algorithm to match user input with a valid hair salon request. The goal for this was to avoid having to create predefined messages to send back to the user and have the bot actually process user input based on common words. For example, the user can enter any word related to haircut, such as "barber shop" or "set up a salon appointment". Botbooker processes this and recognizes that the user is requesting a haircut, so it then gives the user the options to select a hair stylist and confirm their appointment. In addition to processing user input, my NLP implementation can match, with 73% accuracy, the user response.</p> 
            <p>A major challenge, however, was connecting the Node.js backend with the Python server running the NLTK algorithm. There were some workarounds, such as converting the Node server as a middle layer between the client and Python server, that had to be implemented in order for botbooker to fully function without sacrificing performance. As Facebook's chatbot API is most compatible with Node.js, connecting the two servers made this project possible, and now whether the user requests a haircut or other appointment type, botbooker can have a natural conversation.</p>
            <p>
              <small><strong>Salon Dashboard</strong></small>
              <img class="img-responsive" width="550" src="../../img/portfolio/botbookerdash.jpg" alt="Botbooker Dashboard">
            </p>
            <p>I worked with two other developers on this app at a hackathon in September of 2016, and the purpose of our initiative was to improve the user experience of appointment booking systems while decreasing the amount of time it takes to actually book an appointment. We wanted the process to be more informal and conversational, so the use of a chatbot not only decreases booking time, but also provides a means of contact between the salon and the customer. The technology utilized in our app includes a web frontend for the hair salon dashboard, a Node.js backend with a MongoDB database that tracks appointments booked, and the Facebook Messenger API chatbot interface.</p>
        </div>
        <div class="col-md-4 modal-features">
           <h4>Project Features</h4>
            <ul>
                <li>Facebook Messenger API</li>
                <li>Python NLTK Library</li>
                <li>Angular &amp; Node JS</li>
                <li>Chat Bot Interface</li>
                <li>Salon Admin Dashboard</li>
            </ul>
        </div>
    </div>
  <div class="portfolio-footer">
    <a href="https://devpost.com/software/bot-booker" class="modal-btn btn btn-primary" target="_blank">More Info</a>
    <a class="btn btn-default" href="/#at-portfolio">Go Back</a>
  </div>
</div>
<?php include '../partials/footer.php'; ?>