<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Genex Survey</title>
    </head>
<body>
<!--header-->
<div class="page-header">
<div class="header-img">
<img src="images/logo1.png" alt="logo" width="170" height="114"  > 
</div>
</div>
<!--header Ends-->
<!--container-->

<form action="" name="form1" method="post" >
<div class="container"><br>
<div id="survey-body1">
<div class="form-group">
<h4 id="question1">1. Testing Demographic Question</h4>
<label for="test" class="test">Test</label>
<textarea class="form-control" id="q1" placeholder="Write something...." required></textarea>
<a href="#survey-body2"><button type="button" class="btn btn-primary btn-sm" name="q1-submit" id="q1_next">Next &raquo;</button></a>
<br><br><br>

<!--Jquery progress alert start-->
<script>
$("#q1_next").click(function(){
  alert("14% Completed Question 1 ");
});
</script>

<!--Jquery progress alert ends-->

<hr>
<br><br>
</div>
</div>
</div>

<div class="container">
<div id="survey-body2"><br>
<h4 id="question2">2. How would you rate the load speed on the Genex Insights platform?</h4>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">0
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">1
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">2
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">3
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">4
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">5
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">6
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">7
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">8
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">9
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">10
  </label>
</div>
<p class="p1">Extremely Slowly <span class="span2"> Extremely Quickly</span></p>
<a href="#survey-body3"><button type="button" class="btn btn-primary btn-sm" name="q2_submit"  id="q2_next">Next &raquo;</button></a>
<a href="#survey-body1"><button type="button" class="btn btn-success btn-sm" name="q2-back" id="q2_back">&laquo; Back</button></a><br>
<br><br><br>
<hr>
<!--Jquery progress alert start-->

<script>
$("#q2_next").click(function(){
  alert("28% Completed Question 2");
});

$("#q2_back").click(function(){
  alert("14% Completed Question 1");
});
</script>

<!--Jquery progress alert Ends-->

<br><br>
</div>
</div>

<div class="container">
<div id="survey-body3"><br>
<h4 id="question3">3. Did the charts load in the dashboard?</h4>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">No
  </label>
</div>
<a href="#survey-body4"><button type="button" name="q3_submit" class="btn btn-primary btn-sm" id="q3_next">Next &raquo;</button></a>
<a href="#survey-body2"><button type="button" class="btn btn-success btn-sm" name="q3-back" id="q3_back">&laquo; Back</button><br></a>
<br><br><br>
<hr>
<!--Jquery progress alert start-->

<script>
$("#q3_next").click(function(){
  alert("42% Completed Question 3");
});

$("#q3_back").click(function(){
  alert("28% Completed Question 2");
});
</script>

<!--Jquery progress alert Ends-->

<br><br>
</div>
</div>

<div class="container">
<div id="survey-body4"><br>
<div class="form-group">
<h4 id="question4">4. Please tell us more</h4>
<textarea class="form-control" rows="2" id="q4" placeholder="Write something...." required></textarea>
<a href="#survey-body5"><button type="button" class="btn btn-primary btn-sm"  name="q4_next" id="q4_next">Next &raquo;</button></a>
<a href="#survey-body3"><button type="button" class="btn btn-success btn-sm" name="q4-back" id="q4_back">&laquo; Back</button></a>
<br><br><br>
<hr>
<!--Jquery progress alert start-->

<script>
$("#q4_next").click(function(){
  alert("57% Completed Question 4");

  $("#q4_back").click(function(){
  alert("42% Completed Question 3");
});
});
</script>

<!--Jquery progress alert Ends-->

<br><br>
</div>
</div>
</div>

<div class="container">
<div id="survey-body5"><br>
<h4 id="question5">5. How would you rate the load speed for Analytic charts?</h4>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">0
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">1
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">2
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">3
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">4
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">5
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">6
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">7
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">8
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">9
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
  <input type="radio" class="form-check-input" name="optradio">10
  </label>
</div>
<p>Extremely Slowly  <span class="span3">Extremely Quickly</span></p>
<a href="#survey-body6"><button type="button" name="q5_submit" class="btn btn-primary btn-sm" id="q5_next">Next &raquo;</button></a>
<a href="#survey-body4"><button type="button" class="btn btn-success btn-sm" name="q5-back" id="q5_back">&laquo; Back</button></a>
<br><br><br>
<hr>

<!--Jquery progress alert start-->

<script>
$("#q5_next").click(function(){
  alert("71% Completed Question 5");
});

$("#q5_back").click(function(){
  alert("57% Completed Question 4");
});
</script>

<!--Jquery progress alert ends-->

<br><br>
</div>
</div>

<div class="container">
<div id="survey-body6"><br>
<h4 id="question6">6. Do you want to generate a Resolve Alert?</h4>
<div class="form-check-inline">
  <label class="form-check-label">
  <input type="radio" class="form-check-input" name="optradio">Yes
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">No
  </label>
</div>
<a href="#survey-body7"><button type="button" name="q6_submit" class="btn btn-primary btn-sm" id="q6_next">Next &raquo;</button></a>
<a href="#survey-body5"><button type="button" class="btn btn-success btn-sm" name="q6-back" id="q6_back">&laquo; Back</button></a>
<br><br><br>
<hr>

<!--Jquery progress alert start-->

<script>
$("#q6_next").click(function(){
  alert("85% Completed Question 6");
});

$("#q6_back").click(function(){
  alert("71% Completed Question 5");
});
</script>

<!--Jquery progress alert ends-->

<br><br>
</div>
</div>

<div class="container">
<div id="survey-body7"><br>
<h4 id="question7">7. Is there anything else you might want to add or mention?</h4>
<textarea class="form-control" rows="2" id="q7" placeholder="Write something...." required></textarea>
<a href="display.php" class="btn btn-primary btn-sm" name="q7-next" role="button" id="q7_next">Submit &raquo;</a>
<a href="#survey-body6"><button type="button" class="btn btn-success btn-sm" name="q7-back" id="q7_back">&laquo; Back</button></a>
<br>
<br><br><br>
<hr>
<!--Jquery progress alert start-->

<script>
$("#q7_next").click(function(){
  alert("100% Completed Question 7");
});

$("#q7_back").click(function(){
  alert("85% Completed Question 6");
});
</script>

<!--Jquery progress alert ends-->

<br><br>
</div>
</div>
</form>
<br>
<!--container Ends-->
<!--footer-->
<footer class="footer"></footer>
<!--footer Ends-->
<!--jquery-->
  
</body>
</html>