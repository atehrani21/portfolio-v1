<?php include '../partials/header.php'; ?>
<!-- Botbooker Modal -->
<div class="container">
  <h4 class="text-center">MyRent Condos</h4>
  
   <div class="row">
        <div class="col-md-8 modal-description">
           <h4>Project Description</h4>
            <p>I implemented both a PayPal-powered rent payment system and a web development initiative for Julianne Condominium Association, which is a condominium complex in Union City, NJ. The purpose of the site is to provide owners and tenants with updates and resources pertaining to the Association. These include construction, meetings, and budgeting. The payment system, however, was designed to enable online rent payments between tenants and owners, avoiding the 10 business day layover required to mail rent checks. Before May of 2015, the Association had no means of providing information to their residents and pay rent efficiently, causing residents to complain of not being aware of events that were happening.</p>
            <p>
              <small><strong>Payment Graph UI View</strong></small>
              <img class="modal-img img-responsive" src="../../img/portfolio/jcondorentview.png" alt="rent view julianne">
            </p>
            <p>I developed a theme from scratch using HTML, CSS, and JavaScript that contained all necessary sections of the website. For the rental payment system, not only did I integrate the Java PayPal API for instant payments, but I also created a data visualization UI that enabled tenants to view their rent payments and compare month-to-month costs. Before this system was implemented, tenants had to submit a bank check through mail, and as mentioned before, the process could take anywhere from 2-3 weeks depending on how many residents paid on time or late. In addition, tenants often complained of incorrect or fradulent charges on their monthly bills, and had no way of checking how they were being charged. The payment app, though, made it possible to submit instantaneous rent payments and track charges, reducing complaints by 70% two months after release.</p>
            <p>After the static version was completed, I converted it over to WordPress by implementing PHP functions compatible with WordPress. This made it possible for the president of the Association, to edit the site content himself using a simple content management system. Most importantly, however, the theme is responsive, meaning that tenants and owners can access updates right from their phones or tablets. The website launched on May 29, 2015 and the payment system on January 21, 2017.</p>
        </div>
        <div class="col-md-4 modal-features">
           <h4>Project Features</h4>
            <ul>
                <li>PayPal powered payment system</li>
                <li>D3.js data visualization library</li>
                <li>WordPress PHP framework</li>
                <li>Subscription system</li>
            </ul>
        </div>
    </div>
  <div class="portfolio-footer">
    <a class="btn btn-default" href="/#at-portfolio">Go Back</a>
  </div>
</div>
<?php include '../partials/footer.php'; ?>