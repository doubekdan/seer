<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Seer</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <?php include('inc/assets.php'); ?>
   </head>
   <body>
      <?php include('inc/header.php'); ?>
      <section class="checkboxes">
         <div class="container">
            <div class="hiding">
               <a href="javascript:void(0)" title="Hide filter" id="show-element" class="active">Hide filter</a><a href="javascript:void(0)" id="clear_filter" onclick="uncheckElements()" title="Clear filter">Clear filter</a>
            </div>
            <div id="to-show" class="active">
               <form>
                  <div class="checkbox_boxes">
                     <div class="box">
                        <p>Been to spain</p>
                        <div class="checkbox">
                           <label class="contain">Yes
                           <input type="checkbox" value="Yes">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">No
                           <input type="checkbox" value="No">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                     <div class="box">
                        <p>Has a car</p>
                        <div class="checkbox">
                           <label class="contain">Yes
                           <input type="checkbox" value="Yes">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">No
                           <input type="checkbox" value="No">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                     <div class="box beer">
                        <p>Fave beer</p>
                        <div class="inputgrid">
                           <div class="checkbox">
                              <label class="contain">Lager
                              <input type="checkbox" value="Lager">
                              <span class="checkmark"></span>
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="contain">IPA
                              <input type="checkbox" value="IPA">
                              <span class="checkmark"></span>
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="contain">APA
                              <input type="checkbox" value="APA">
                              <span class="checkmark"></span>
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="contain">Pilsner
                              <input type="checkbox" value="Pilsner">
                              <span class="checkmark"></span>
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="contain">Cheapest
                              <input type="checkbox" value="Cheapest">
                              <span class="checkmark"></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="box">
                        <p>Pets</p>
                        <div class="checkbox">
                           <label class="contain">Cat
                           <input type="checkbox" value="Cat">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">Dog
                           <input type="checkbox" value="Dog">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">Fish
                           <input type="checkbox" value="Fish">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                     <div class="box">
                        <p>Run a 5k</p>
                        <div class="checkbox">
                           <label class="contain">Yes
                           <input type="checkbox" value="Yes">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">No
                           <input type="checkbox" value="No">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                     <div class="box">
                        <p>Has bicycle</p>
                        <div class="checkbox">
                           <label class="contain">Yes
                           <input type="checkbox" value="Yes">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">No
                           <input type="checkbox" value="No">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                     <div class="box">
                        <p>Eat salad</p>
                        <div class="checkbox">
                           <label class="contain">Yes
                           <input type="checkbox" value="Yes">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">No
                           <input type="checkbox" value="No">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                     <div class="box">
                        <p>Office</p>
                        <div class="checkbox">
                           <label class="contain">Philly
                           <input type="checkbox" value="Philly">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="checkbox">
                           <label class="contain">San Diego
                           <input type="checkbox" value="San Diego">
                           <span class="checkmark"></span>
                           </label>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <section class="team">
         <div class="container">
            <div class="row">
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person.png" alt="Ally Malick">
                     </div>
                     <h5>Ally Malick</h5>
                     <h5>PPC Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person1.png" alt="Matt Mcanear">
                     </div>
                     <h5>Matt Mcanear</h5>
                     <h5>Data Scientist</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person2.png" alt="Teresa Lopez">
                     </div>
                     <h5>Teresa Lopez</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person3.png" alt="Hannah Tom">
                     </div>
                     <h5>Hannah Tom</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person3.png" alt="Hannah Tom">
                     </div>
                     <h5>Hannah Tom</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person.png" alt="Ally Malick">
                     </div>
                     <h5>Ally Malick</h5>
                     <h5>PPC Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person1.png" alt="Matt Mcanear">
                     </div>
                     <h5>Matt Mcanear</h5>
                     <h5>Data Scientist</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person2.png" alt="Teresa Lopez">
                     </div>
                     <h5>Teresa Lopez</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person4.png" alt="New person name">
                     </div>
                     <h5>New person name</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person4.png" alt="New person name">
                     </div>
                     <h5>New person name</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person1.png" alt="Matt Mcanear">
                     </div>
                     <h5>Matt Mcanear</h5>
                     <h5>Data Scientist</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person2.png" alt="Teresa Lopez">
                     </div>
                     <h5>Teresa Lopez</h5>
                     <h5>SEO Associate</h5>
                  </div>
               </a>
               <a href="javascript:void(0)" title="Person - Seer team" class="show" aria-haspopup="true">
                  <div class="person" data-aos="fade-in">
                     <div class="hero-image">
                        <img src="assets/images/team/person.png" alt="Ally Malick">
                     </div>
                     <h5>Ally Malick</h5>
                     <h5>PPC Associate</h5>
                  </div>
               </a>
            </div>
         </div>
      </section>
      <section>
         <div class="mask" role="dialog"></div>
         <div class="modal" role="alert">
            <button class="close" role="button"><img src="assets/images/close_seer.png" alt="Close"></button>
            <a href="#" title="Arrow" class="arrow"><img src="assets/images/arrow_seer.png" alt="Left arrow"></a>
            <a href="#" title="Arrow" class="arrow"><img src="assets/images/arrow_seer.png" alt="Right arrow"></a>
            <img src="assets/images/team/person.png" alt="Ally Malick">
            <div class="card_info">
               <h3>Ally Malick</h3>
               <ul>
                  <li><strong>Role:</strong> PPC expert</li>
                  <li><strong>Office:</strong> San Diego, CA</li>
                  <li><strong>Categories:</strong> <a href="#" title="Has run 5k">Has run 5k</a></li>
                  <li><strong>Pets:</strong> <a href="#" title="Fish">Fish</a> <a href="#">Cat</a></li>
               </ul>
            </div>
            <p>Ted ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam <span class="blue_text">voluptatem quia</span> voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
         </div>
         <div class="maskabout" role="dialog"></div>
         <div class="modal aboutsite" role="alert">
            <a href="#" title="Arrow" class="arrowabout"><img src="assets/images/arrow_seer.png" alt="Left arrow"></a>
            <a href="#" title="Arrow" class="arrowabout"><img src="assets/images/arrow_seer.png" alt="Right arrow"></a>
            <button class="close" role="button"><img src="assets/images/close_seer.png" alt="Close"></button>
            <h2>Seer human filter</h2>
            <h3>About this site</h3>
            <img src="assets/images/line_horizontal_seer.png" alt="Horizontal line - Seer">
            <h4>The Must-Have HR machine</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, exercitation an
               Example of an in-line link. Example of an <a href="#">in-line link Hover</a> quis nostrud ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
         </div>
      </section>
      <section class="social" data-aos="fade-in">         
         <a href="#" title="Facebook Seer"><span class="arrow_box">129</span><img src="assets/images/social/facebook_seer.jpg" alt="Facebook - Seer"></a>
         <a href="#" title="Twitter Seer"><img src="assets/images/social/twitter_seer.jpg" alt="Twitter - Seer"></a>
         <a href="#" title="Google+ Seer"><span class="arrow_box">88</span><img src="assets/images/social/google-plus_seer.jpg" alt="Google+ - Seer"></a>
         <a href="#" title="Pinterest Seer"><span class="arrow_box">20</span><img src="assets/images/social/pinterest_seer.jpg" alt="Pinterest - Seer"></a>
         <a href="#" title="LinkedIn Seer"><span class="arrow_box">319</span><img src="assets/images/social/linkedin_seer.jpg" alt="LinkedIn - Seer"></a>
         <a href="#" title="Stack Seer"><span class="arrow_box">141</span><img src="assets/images/social/stack_seer.jpg" alt="Stack - Seer"></a>
      </section>
      <?php
         include('inc/foot.php'); 
         include('inc/scripts.php');
         ?>
   </body>
</html>