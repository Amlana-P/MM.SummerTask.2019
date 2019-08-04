        
        <div class="container">  
          <br />  
          <br />
          <br />
          <h2 align="center">Welcome to Live Poll System</h2><br/>
              
          <div class="row">
            <div class="col-md-6">
             <form method="post" id="poll_form" action="<?php echo base_url()?>/polls/poll">
              <h3>Who is the hottest woman among these?</h3>
              <br />

          
              <div class="radio">
               <label><h4><input type="radio" name="poll_option" class="poll_option" value="Amber Heard"/>Amber Heard</h4></label>
             </div>
             <div class="radio">
               <label><h4><input type="radio" name="poll_option" class="poll_option" value="Jennifer Lawrence" />Jennifer Lawrence</h4></label>
             </div>
             <div class="radio">
               <label><h4><input type="radio" name="poll_option" class="poll_option" value="Gigi Hadid" />Gigi Hadid</h4></label>
             </div>
             <div class="radio">
               <label><h4><input type="radio" name="poll_option" class="poll_option" value="Kendal Jenner" />Kendal Jenner</h4></label>
             </div>
             <div class="radio">
               <label><h4><input type="radio" name="poll_option" class="poll_option" value="Kylie Jenner" />Kylie Jenner</h4></label>
             </div>
             <br />
             <input type="submit" name="insert" value="insert" class="btn btn-primary" />
           </form>
           
           <br />
         </div>
         <div class="col-md-6">
           <br />
           <br />
           <br />
           <h4>Live Poll Result</h4><br />
           <div id="poll_result"></div>
         </div>
       </div>


       <br />
       <br />
       <br />
     </div>
