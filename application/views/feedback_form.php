<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net4U Feedback Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">
        h5{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="card-header">Basic Information</h3>
        <br>
        <form action="<?= site_url('feedback/submit'); ?>" method="POST">
            <!-- Basic Information -->
            <div class="form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required pattern="[A-Za-z\s]+" title="Only alphabetic characters are allowed" placeholder="Your answer">
            </div>
            <div class="form-group">
                <label for="age">Age<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Your answer" required>
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female" required> Female
            </div>
            <div class="form-group">
                <label for="flat_no">Flat No. <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="flat_no" name="flat_no" placeholder="Your answer" required>
            </div>
            <div class="form-group">
                <label for="building">Building <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="building" name="building"  placeholder="Your answer" required>
            </div>
             <br>
            <!-- Section A – NPS -->
            <h5>Section A – NPS</h5>
            <div class="form-group">
                <label>QA1. How likely is it that you would recommend Net4U to a friend or a colleague? <span class="text-danger">*</span><br>
                (Please use the scale from 10 to 0. 10 means “Definitely recommend” and 0 means “Would Never Recommend”. You can also use any number in between.)</label><br>
                 Would Never Recommend
                 <input type="radio" name="recommend" value="0" required>0
                <input type="radio" name="recommend" value="1"> 1
                <input type="radio" name="recommend" value="2"> 2
                <input type="radio" name="recommend" value="3"> 3
                <input type="radio" name="recommend" value="4"> 4
                <input type="radio" name="recommend" value="5"> 5
                <input type="radio" name="recommend" value="6"> 6
                <input type="radio" name="recommend" value="7"> 7
                <input type="radio" name="recommend" value="8"> 8
                <input type="radio" name="recommend" value="9"> 9
                <input type="radio" name="recommend" value="10">10
                 Definitely recommend
                <!-- //<input type="number" name="recommend" min="0" max="10" step="1"> -->
            </div>
            <div class="form-group">
                <label for="reason">QA2. Why do you say so?(Reason #01)</label>
                <input type="text" class="form-control" id="reason" name="reason" placeholder="Your answer">
            </div>
             <br>
            <!-- Section B – Internet Related Issues -->
            <h5>Section B – Internet Related Issues (Last 06 Months)</h5>

            <div class="form-group">
                <label>QB1. Have You faced any Internet Related Issues in Last 06 Months? <span class="text-danger">*</span></label><br>
                <input type="radio" name="internet_issue" value="Yes" id="yes_issue" required> Yes
                <input type="radio" name="internet_issue" value="No" id="no_issue" required> No
            </div>
            <div class="form-group" id="issue_details" style="display:none;" >
                <label for="issue">QB2. What Issue have You faced?</label>
                <input type="text" class="form-control" id="issue" name="issue" placeholder="Your answer">
            </div>
            <div class="form-group" id="complaint_section">
                <label>QB3. Have You raised a Complaint Regarding the Issue Faced?</label><br>
                <input type="radio" name="raised_complaint" value="Yes" id="yes_complaint"> Yes
                <input type="radio" name="raised_complaint" value="No" id="no_complaint"> No
            </div>
            <div class="form-group" id="complaint_rating" style="display:none;">
                <label>QB4. Could you rate your service/complaint handling experience by rating on scale of 10 to 0? (10 being "Extremely Satisfied" and 0 being "Extremely Dissatisfied.")</label><br>
                Extremely Dissatisfied
                <input type="radio" name="service_rating" value="0" >0
                <input type="radio" name="service_rating" value="1">1
                <input type="radio" name="service_rating" value="2">2
                <input type="radio" name="service_rating" value="3">3
                <input type="radio" name="service_rating" value="4">4
                <input type="radio" name="service_rating" value="5">5
                <input type="radio" name="service_rating" value="6">6
                <input type="radio" name="service_rating" value="7">7
                <input type="radio" name="service_rating" value="8">8
                <input type="radio" name="service_rating" value="9">9
                <input type="radio" name="service_rating" value="10">10 Extremely Satisfied
            </div>
            <div class="form-group" id="complaint_reason" style="display:none;">
                 <label  for="service_reason">QB5.Reasons</label>
                <input type="text" class="form-control" id="service_reason" name="service_reason" placeholder="Your answer">
            </div>

     <div class="form-group">
    <label>QB6. We would NOW read out a few statements related to the Complaint Resolution Process. <span class="text-danger">*</span><br> (Please let us know how strongly you agree on a scale of 5 to 1. 5 being "Strongly Agree" and 1 being "Strongly Disagree")</label><br>
    
    <label>My Complaint was promptly Acted Upon</label><br>
    <input type="radio" name="prompt_action_rating" value="NA" required> NA
    <input type="radio" name="prompt_action_rating" value="1"> 1
    <input type="radio" name="prompt_action_rating" value="2"> 2
    <input type="radio" name="prompt_action_rating" value="3"> 3
    <input type="radio" name="prompt_action_rating" value="4"> 4
    <input type="radio" name="prompt_action_rating" value="5"> 5
    <br>

    <label>Net4U Person has provided Proper Guidance to me on Phone</label><br>
    <input type="radio" name="guidance_rating" value="NA" required> NA
    <input type="radio" name="guidance_rating" value="1"> 1
    <input type="radio" name="guidance_rating" value="2"> 2
    <input type="radio" name="guidance_rating" value="3"> 3
    <input type="radio" name="guidance_rating" value="4"> 4
    <input type="radio" name="guidance_rating" value="5"> 5
    <br>

    <label>Net4U Person visited my home and has done the needful</label><br>
    <input type="radio" name="home_visit_rating" value="NA" required> NA
    <input type="radio" name="home_visit_rating" value="1" > 1
    <input type="radio" name="home_visit_rating" value="2"> 2
    <input type="radio" name="home_visit_rating" value="3"> 3
    <input type="radio" name="home_visit_rating" value="4"> 4
    <input type="radio" name="home_visit_rating" value="5"> 5
    <br>

    <label>My Complaint was Resolved in a Timely Manner</label><br>
    <input type="radio" name="timely_resolution_rating" value="NA" required> NA
    <input type="radio" name="timely_resolution_rating" value="1"> 1
    <input type="radio" name="timely_resolution_rating" value="2"> 2
    <input type="radio" name="timely_resolution_rating" value="3"> 3
    <input type="radio" name="timely_resolution_rating" value="4"> 4
    <input type="radio" name="timely_resolution_rating" value="5"> 5
    <br>

    <label>I am Happy with the manner in which My Complaint was Handled by Net4U Services</label><br>
    <input type="radio" name="handling_rating" value="NA" required> NA
    <input type="radio" name="handling_rating" value="1"> 1
    <input type="radio" name="handling_rating" value="2"> 2
    <input type="radio" name="handling_rating" value="3"> 3
    <input type="radio" name="handling_rating" value="4"> 4
    <input type="radio" name="handling_rating" value="5"> 5
    <br>

    <label>I felt valued as a Customer</label><br>
    <input type="radio" name="valued_rating" value="NA" required> NA
    <input type="radio" name="valued_rating" value="1"> 1
    <input type="radio" name="valued_rating" value="2"> 2
    <input type="radio" name="valued_rating" value="3"> 3
    <input type="radio" name="valued_rating" value="4"> 4
    <input type="radio" name="valued_rating" value="5"> 5
</div>

              <br>

            <!-- Section C – Feedback On Executive -->
            <h5>Section C – Feedback On Executive</h5>
            <div>
            <div class="form-group">
                <label>QC1.We would read out a few statements related to Issue Resolution Via Home Visit.<span class="text-danger">*</span><br>(Please let us know how strongly you agree on scale of 5 to 1. 5 being "Strongly Agree" and 1 being "Strongly Disagree")</label><br>
                <label>Net4U Executive was polite and courteous</label><br>
                <input type="radio" name="courteous_rating" value="NA" required> NA
                <input type="radio" name="courteous_rating" value="1"> 1
                <input type="radio" name="courteous_rating" value="2"> 2
                <input type="radio" name="courteous_rating" value="3"> 3
                <input type="radio" name="courteous_rating" value="4"> 4
                <input type="radio" name="courteous_rating" value="5"> 5
                <br>
                 <label>Net4U Executive was available whenever required</label><br>
                  <input type="radio" name="available_rating" value="NA" required> NA
                <input type="radio" name="available_rating" value="1"> 1
                <input type="radio" name="available_rating" value="2"> 2
                <input type="radio" name="available_rating" value="3"> 3
                <input type="radio" name="available_rating" value="4"> 4
                <input type="radio" name="available_rating" value="5"> 5
                <br>
                 <label>Net4U Executive has good knowledge</label><br>
                 <input type="radio" name="knowledge_rating" value="NA" required> NA
                <input type="radio" name="knowledge_rating" value="1"> 1
                <input type="radio" name="knowledge_rating" value="2"> 2
                <input type="radio" name="knowledge_rating" value="3"> 3
                <input type="radio" name="knowledge_rating" value="4"> 4
                <input type="radio" name="knowledge_rating" value="5"> 5
                <br>
                 <label>Net4U Executive was able to solve all your queries</label><br>
                 <input type="radio" name="query_resolution_rating" value="NA" required> NA
                <input type="radio" name="query_resolution_rating" value="1"> 1
                <input type="radio" name="query_resolution_rating" value="2"> 2
                <input type="radio" name="query_resolution_rating" value="3"> 3
                <input type="radio" name="query_resolution_rating" value="4"> 4
                <input type="radio" name="query_resolution_rating" value="5"> 5
                <br>
                 <label>Net4U Executive fulfilled his promises and commitment</label><br>
                 <input type="radio" name="promises_fulfilled_rating" value="NA" required> NA
                <input type="radio" name="promises_fulfilled_rating" value="1"> 1
                <input type="radio" name="promises_fulfilled_rating" value="2"> 2
                <input type="radio" name="promises_fulfilled_rating" value="3"> 3
                <input type="radio" name="promises_fulfilled_rating" value="4"> 4
                <input type="radio" name="promises_fulfilled_rating" value="5"> 5
           </div>
        </div>
        <br>
            
            <!-- Section D – Future Intent -->
            <h5>Section D – Future Intent</h5>
            <div class="form-group">
                <label>QD1. Do You wish to Continue with Net4U Services for Your Internet Provider? <span class="text-danger">*</span></label><br>
                <input type="radio" name="continue_service" value="Yes" id="continue_yes" required> Yes
                <input type="radio" name="continue_service" value="No" id="continue_no" required> No
            </div>
            <div class="form-group" id="exit_reason" style="display:none;">
                <label for="exit_reason">Please let us know Your Reasons.</label>
                <input type="text" class="form-control" id="exit_reason" name="exit_reason" placeholder="Your answer" >
            </div>
            <br>

            <!-- Section E – Improvement Areas / Suggestions -->
            <h5>Section E – Improvement Areas / Suggestions</h5>
            <div class="form-group" >
                <label for="improvement">QE. Could you let us know areas where Net4U Services should improve? <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="improvement" name="improvement" placeholder="Your answer" required>
            </div>
        <div style="margin-bottom:10px;">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
        </form>
    </div>


    <!-- <footer class="bg-light text-center text-black mt-5 p-4"><p>Net4U Survey</p></footer> -->

    <script>
        // JavaScript to handle showing/hiding fields based on user input
        document.getElementById('yes_issue').addEventListener('click', function() {
            document.getElementById('issue_details').style.display = 'block';
              document.getElementById('complaint_section').style.display = 'block';
        });
        document.getElementById('no_issue').addEventListener('click', function() {
            document.getElementById('issue_details').style.display = 'none';
            document.getElementById('complaint_section').style.display = 'none';
            document.getElementById('complaint_rating').style.display = 'none';
            document.getElementById('complaint_reason').style.display = 'none';
        });
        
        document.getElementById('yes_complaint').addEventListener('click', function() {
            document.getElementById('complaint_rating').style.display = 'block';
            document.getElementById('complaint_reason').style.display = 'block';
        });
        document.getElementById('no_complaint').addEventListener('click', function() {
            document.getElementById('complaint_rating').style.display = 'none';
            document.getElementById('complaint_reason').style.display = 'none';
        });
        
        document.getElementById('continue_no').addEventListener('click', function() {
            document.getElementById('exit_reason').style.display = 'block';
        });
        document.getElementById('continue_yes').addEventListener('click', function() {
            document.getElementById('exit_reason').style.display = 'none';
        });
    </script>
</body>
</html>
