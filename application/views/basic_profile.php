  <style type="text/css">
 body {
        padding-top: 0px;
      }
      </style>
   <div class="box-main">
          <div class="basic-p-title">
                <h1><?php echo $this->session->userdata('fname')?>,let's start creating your professional profile</h1>
          </div>


          
            <div class="basic-box">

              <form id="basic-form" class="basic-form"  method="post" action="<?php echo base_url(); ?>index.php/basic_profile/process">
              
              <div class="field-wrapper">
                <label for="country">*Country: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="country" name="country">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>

              <div class="field-wrapper">
                <label for="pc">Postal Code: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="pc" name="pc" />
                  </div>
              </div>

              
              
                 
                <div class="field-wrapper-option">
                  <label class="radio">
                    
            <input type="radio" name="optionsRadios" id="r1" value="1" checked>
              Employed 
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="r2" value="2">
              Job Seeker 
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="r3" value="3">
              Student
            </label>
           
          </div>
                
              
          <div id="A">
              <div class="field-wrapper">
                <label for="job">*Job Title: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="job" name="job" />
                  </div>
              </div>

              <div class="field-wrapper">
              <input type="checkbox" name="check1" id="check1" name="emp"> I am self-employed
            </div>

            <div id="com">
              <div class="field-wrapper">
                <label for="company">*Company: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="company" name="company" />
                  </div>
              </div>
            </div>

          <div id="ind">
              <div class="field-wrapper">
                <label for="country">*Industry: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="country" name="industry">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
            </div>

              </div>



              <div id="B">
              <div class="field-wrapper">
                <label for="uni">*School/University: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="uni" name="uni" />
                  </div>
              </div>

              

              <div class="field-wrapper">
                <label for="date">*Dates Attended: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="date" name="from">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>

              <div id="to">
              <div class="field-wrapper">
                <label for="date">to: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="date" name="to">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
            </div>

              </div>


              <div id="C">
              <div class="field-wrapper">
                <label for="mjob">*Most Recent Job Title: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="mjob" name="mjob" />
                  </div>
              </div>

              <div class="field-wrapper">
              <input type="checkbox" name="check1" id="check2" name="emp1"> I am self-employed
            </div>

            <div id="com1">

              <div class="field-wrapper">
                <label for="mcomp">*Most Recent Company: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="mcomp" name="mcomp" />
                  </div>
              </div>
            </div>

            <div id="ind1">
              <div class="field-wrapper">
                <label for="country">*Industry: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="country" name="mindustry">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
            </div>
              
              
              <div class="field-wrapper">
                <label for="date">*Time Period: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="date" name="from1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
            

              <div id="to">
              <div class="field-wrapper">
                <label for="date">to: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                    <select id="date" name="from2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
            </div>

              </div>
              
              
              <!-- <div id="box-actions"> -->
             
              <button type="submit" class="btn btn-primary" onClick="<?php echo base_url(); ?>index.php/basic_profile/process">Create Profile</button> 
              <span class="asterik">* Indicates  fields</span>
              
              <!-- <input type="submit" value""> -->


              </form>


            
             </div>


        <div class="basic-p-extra">
          <div class="basic-b-data">
            <p>Save time by using your Facebook account to sign up for LinkedIn.</p>
            
        </div>
     </div>
    

          
 </div>

      
