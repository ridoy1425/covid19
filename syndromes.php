<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Covid-19</title>
  </head>
  <body>
      <div class="Jumbotron">
        <div class="first_form">

          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h2>COVID-19 Self Assessment System</h2>
              <form action="result.php" method="post">
            <div class="first_step">
              <h5>(Step 1) Give your persional information.</h5>
                <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age" placeholder="Enter Age: Ex-24" name="age" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <select name="sex"class="form-control">
                  <option>None</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="form-group">
                <label for="temp">Body temperature</label>
                <input type="text" class="form-control" id="temp" placeholder="Enter Temperature: Ex- 102" name="temp" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
              <div class="second_step">
                <h5>(Step 2) If you have any of below symptoms select this.</h5>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Breathing problem" name="sick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Breathing problem
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Dry cough" name="sick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Dry cough
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Sore throat" name="sick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Sore throat
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Weakness" name="sick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Weakness
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Runny nose" name="sick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Runny nose
                </label>
              </div>
              </div>
              <div class="third_step">
                <h5>(Step 3) Give additional information about symptoms.</h5>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaurltCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Abdominal pain
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Vomiting
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Diarrhoea
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Chest pain or pressure
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Muscle pain
                </label>
              </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Loss of taste or smell
                </label>
              </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Rash on skin, or discoloration of fingers or toes
                </label>
              </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="addsick[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Loss of speech or movement
                </label>
              </div>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form></div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>


