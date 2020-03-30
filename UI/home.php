<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
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
<form action="" name="form1" method="post">
<div class="container">
<div class="survey-body1">
<div class="form-group">
<h4 id="question1">1. Testing Demographic Question</h4>
<label for="test" class="test">test</label>
<textarea class="form-control" rows="2" id="q1"></textarea>
<button type="button" class="btn btn-primary" name="q1-submit" id="q1_submit">Next &raquo;</button>
<br><br><br>
<hr>
<br><br>
</div>
</div>
</div>

<div class="container">
<div class="survey-body2"><br>
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
<button type="submit" class="btn btn-primary" name="q2_submit" id="q2_submit">Next &raquo;</button>
<br>
<br><br><br>
<hr>
<br><br>
</div>
</div>

<div class="container">
<div class="survey-body3"><br>
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
<button type="submit" name="q3_submit" class="btn btn-primary" id="q3_submit">Next &raquo;</button>
<br>
<br><br><br>
<hr>
<br><br>
</div>
</div>

<div class="container">
<div class="survey-body4"><br>
<div class="form-group">
<h4 id="question4">4. Please tell us more</h4>
<textarea class="form-control" rows="2" id="q4"></textarea>
<button type="submit" name="q4_submit" class="btn btn-primary" id="q4_submit">Next &raquo;</button>
<br><br><br>
<hr>
<br><br>
</div>
</div>
</div>

<div class="container">
<div class="survey-body5"><br>
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
<button type="submit" name="q5_submit" class="btn btn-primary" id="q5_submit">Next &raquo;</button>
<br><br><br>
<hr>
<br><br>
</div>
</div>

<div class="container">
<div class="survey-body6"><br>
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
<a href=""><button type="submit" name="q6_submit" class="btn btn-primary" id="q6_submit">Next &raquo;</button></a>
<br><br><br>
<hr>
<br><br>
</div>
</div>

<div class="container">
<div class="survey-body7"><br>
<h4 id="question7">7. Is there anything else you might want to add or mention?</h4>
<textarea class="form-control" rows="2" id="q7"></textarea>
<a href="display.php" class="btn btn-primary" role="button" id="q7_submit">Next &raquo;</a>
<br>
<br><br><br>
<hr>
<br><br>
</div>
</div>
</form>
<br>
<!--container Ends-->
<!--footer-->
<footer class="footer">
<div class="q-counter pgBar">
			<div class="progress-item n-answered">85%</div>
			<div class="progress-item progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="85.71428571428571" aria-valuemin="0" aria-valuemax="100" style="width: 85.7143%;"></div>
			</div>
		</div>
</footer>
<!--footer Ends-->
<!--jquery-->

  

    
</body>
</html>