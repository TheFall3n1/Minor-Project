<!DOCTYPE html>
<head><title>Resume Maker</title>
    <link href="formcss.css" rel="stylesheet">
    <script src="blue\form.js"></script>
</head>
<body>
    <h2>Online Resume Maker</h2>
    <div class="container">
        <h3>Please fill in your details</h3>
  <form method="post"  action="blue\template.php">
    <div class="row">
      <h4>Personal Details </h4>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Full Name", id="fname", name="fname">
            <div class="input-icon"> 
                <i class="i.fa.fa-user"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Your Role", id="role", name="role")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="email", placeholder="Email Adress", id="email", name="email">
            <div class="input-icon">
                <i class="i.fa.fa-envelope"></i>
            </div>
        </div> 
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Mobile No.", id="mob", name="mob")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Residence", id="loc", name="loc")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Guardian Name", id="grd", name="grd")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Website", id="web", name="web")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
    </div>
    <div class="row">
        
            <h5> Date of Birth </h5>
            <div class="input-group"></div>
                <div class="col-third">
                    <input (type="text", placeholder="DD", id="d", name="d")>
                </div>
                <div class="col-third">
                    <input (type="text", placeholder="MM", id="o", name="o")>
                </div>
                <div class="col-third">
                    <input (type="text", placeholder="YYYY", id="b", name="b")>
                </div>
        
        <div class="col-half">
        <h5> Gender </h5>
        <div>

            <label class="rad-label">
              <input type="radio" class="rad-input" name="gender" id="m" value="male">
              <div class="rad-design"></div>
              <div class="rad-text">Male</div>
            </label>
          
            <label class="rad-label">
              <input type="radio" class="rad-input" name="gender" id="female" value="female">
              <div class="rad-design"></div>
              <div class="rad-text">Female</div>
            </label>
          
        </div>
        </div>
        <div class="col-half">
            <h5>Status</h5>
            <div>

                <label class="rad-label">
                  <input type="radio" class="rad-input" name="stat" value="Single">
                  <div class="rad-design"></div>
                  <div class="rad-text">Single</div>
                </label>
              
                <label class="rad-label">
                  <input type="radio" class="rad-input" name="stat" value="Married">
                  <div class="rad-design"></div>
                  <div class="rad-text">Married</div>
                </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="stat" value="Divorced">
                    <div class="rad-design"></div>
                    <div class="rad-text">Divorced</div>
                </label>
                  
                <label class="rad-label">
                    <input type="radio" class="rad-input" name="stat" value="Committed">
                    <div class="rad-design"></div>
                    <div class="rad-text">Committed</div>
                </label>
                  
            </div>
        </div>
    </div>
    <div class="row">
        <h4>Education Details </h4>
        <h5>High School Details</h5>
          <div class="input-group.input-group-icon">
              <input (type="text", placeholder="High School Completion Year", id="hst", name="hst">
              <div class="input-icon">
                  <i class="i.fa.fa-user"></i>
              </div>
          </div>
          <div class="input-group.input-group-icon">
              <input (type="text", placeholder="High School Name", id="hsn", name="hsn">
              <div class="input-icon">
                  <i class="i.fa.fa-envelope"></i>
              </div>
          </div>
        <h5>Graduation Details</h5>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Degree Program Year", id="deg1", name="deg1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Degree Program Name", id="degn", name="degn")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="College/Uni Name", id="degc", name="degc")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <h5>Honors Details (If Any)</h5>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Honors Program Year", id="deg2", name="deg2")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Honours Program Name", id="degn1", name="degn1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="College/University Name", id="degc1", name="degc1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
    </div>
    <div class="row">
        <h4>Work Experience (If Any)</h4>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Your Position/Designation", id="wp0", name="wp0")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Company Name", id="wc0", name="wc0")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="number", placeholder="Years Served", id="wy0", name="wy0")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Details/Comments", id="det1", name="det1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <br>
        <h5>Current Job</h5>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Your Position/Designation", id="wp1", name="wp1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Company Name", id="wc1", name="wc1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="number", placeholder="Years Served", id="wy1", name="wy1")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="number", placeholder="CTC", id="ctc", name="ctc")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Details/Comments", id="det2", name="det2")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
    </div>
    <h5>Your Objective</h5>
        <div class="input-group.input-group-icon">
            <input (type="text", placeholder="Mention your job objectives here.", id="obj", name="obj")>
            <div class="input-icon">
                <i class="i.fa.fa-key"></i>
            </div>
        </div>
    <center>
    <button class="submit-button state-0">
        <span class="pre-state-msg">Submit</span>
        <span class="current-state-msg hide">Sending...</span>
        <span class="done-state-msg hide">Done!</span>
    </button>
    </center>
    
   </form>
   </div>
</body>