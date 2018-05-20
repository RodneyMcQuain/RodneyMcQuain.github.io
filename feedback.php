<title>Feedback</title>

<Head>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</Head>

<div class="topbox">
  <a href="index.html"><button>Home</button></a>
  <a href="projects.html"><button>Projects</button></a>
  <hr />
</div>

<div class="projectbox">
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" class="feedback">
    
    <label for="email">Email:</label>
    <input type="text" id="email" class="feedback">
    <br/>
    <br/>
    <label for="program">Program:</label>
    <select id="program" name="program">
      <option value="meleeNotes">Melee Notes</option>
      <option value="meleeCalculator">Melee Calculator</option>
    </select>
    <br/>
    <br/>
    <label for="feedbackInfo">Feedback:</label>
    <br/>
    <textarea id="feedbackInfo" name="feedbackInfo" rows="10" style="width: 600;"></textarea>
    <br/>
    <br/>
    <input type="submit" value="Submit">
  </form>
  <?php
    $name = $_POST['name'];
    $program = $_POST['program'];
    $visitor_email = $_POST['email'];
    $feedback_info = $_POST['feedbackInfo'];
  ?>
  
  <?php
    $email_from = 'somebody123@protonmail.com';
    $email_subject = "Feedback about $program from $name";
    $email_body = "$feedback_info";
  ?>
  
  <?php
    $to = "somebody123@protonmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
  ?>

</div>
