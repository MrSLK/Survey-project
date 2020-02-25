<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" href="More/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="More/css/styles.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Cabin:700"
    />
    <link rel="stylesheet" href="More/fonts/font-awesome.min.css" />
</head>
<body font color="#000000">
    <section
      id="download"
      class="download-section content-section text-center"
      style="background-image:url('image/blue.jpg');"
    >
      <div class="container">
        <br /><br /><br />
        <div class="row col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h1>Survey Form</h1>
            </div>
            <div class="panel-body">
              <form action="connect.php" method="post">
                <div class="form-group">
                  <label for="surname">Surname</label>
                  <input
                    type="text"
                    class="form-control"
                    id="surname"
                    name="surname"
                  />
                </div>

                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="first_name"
                  />
                </div>

                <div class="form-group">
                  <label for="contactNum">Contact Number</label>
                  <input
                    type="text"
                    class="form-control"
                    id="contactNum"
                    name="contactNum"
                  />
                </div>

                <div class="form-group">
                  <label for="dates">Date</label>
                  <input
                    type="date"
                    class="form-control"
                    id="dates"
                    name="dates"
                  />
                </div>

                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" name="age" />
                </div>

                <div class="form-group">
                  <label for="food"
                    >What is your favourite food? (You can choose more than 1
                    answer)</label
                  >
                  <div>
                    <label for="Pizza" class="radio-inline">
                      <input
                        type="checkbox"
                        name="food"
                        value="pizza"
                        id="Pizza"
                      />Pizza</label
                    >
                    <div>
                      <label for="Pasta" class="radio-inline">
                        <input
                          type="checkbox"
                          name="food"
                          value="pasta"
                          id="Pasta"
                        />Pasta</label
                      >
                    </div>

                    <div class="radio-inline">
                      <label for="papwors" class="radio-inline">
                        <input
                          type="checkbox"
                          name="food"
                          value="papwors"
                          id="papwors"
                        />Pap and wors</label
                      >
                    </div>
                    <div class="radio-inline">
                      <label for="Chicken_stir_fry" class="radio-inline">
                        <input
                          type="checkbox"
                          name="food"
                          value="Chicken_stir_fry"
                          id="Chicken_stir_fry"
                        />Chicken stir fry</label
                      >
                    </div>
                    <div class="radio-inline">
                      <label for="beefStirFry" class="radio-inline">
                        <input
                          type="checkbox"
                          name="food"
                          value="beefStirFry"
                          id="beefStirFry"
                        />Beef stir fry</label
                      >
                    </div>
                    <div class="radio-inline">
                      <label for="other" class="radio-inline"
                        ><input
                          type="checkbox"
                          name="food"
                          id="other"
                          value="other"
                        />Other</label
                      >
                    </div>
                  </div>
                </div>
                <br />
                <div class="form-group" align="left">
                  <label for="scale"
                    >On a scale of 1 to 5 indicate whether you strongly agree to
                    strong disagree</label
                  >
                </div>
                <div class="form-group">
                  <table style="border: 100px ;">
                    <thead>
                      <tr>
                        <th></th>
                        <th>
                          Strongly Agree <br /><strong
                            >&emsp; &emsp; &nbsp; (1)</strong
                          >
                        </th>
                        <th>
                          &nbsp; Agree <br /><strong>&ensp; &nbsp; (2)</strong>
                        </th>
                        <th>&nbsp; Neutral<br /><strong>&emsp; (3)</strong></th>
                        <th>
                          &nbsp; Disagree <br /><strong
                            >&emsp; &nbsp;(4)</strong
                          >
                        </th>
                        <th>
                          &nbsp; Strongly Disagree <br /><strong
                            >&emsp; &emsp; &ensp; &nbsp; (5)</strong
                          >
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>I like to eat out</td>
                        <td>
                          <input
                            type="radio"
                            name="eatOut"
                            value="strongAgree"
                          />
                        </td>
                        <td>
                          <input type="radio" name="eatOut" value="agree" />
                        </td>
                        <td>
                          <input type="radio" name="eatOut" value="neutral" />
                        </td>
                        <td>
                          <input type="radio" name="eatOut" value="disagree" />
                        </td>
                        <td>
                          <input
                            type="radio"
                            name="eatOut"
                            value="strongDisagree"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>I like to watch movies</td>
                        <td>
                          <input
                            type="radio"
                            name="movies"
                            value="strongAgree"
                          />
                        </td>
                        <td>
                          <input type="radio" name="movies" value="agree" />
                        </td>
                        <td>
                          <input type="radio" name="movies" value="neutral" />
                        </td>
                        <td>
                          <input type="radio" name="movies" value="disagree" />
                        </td>
                        <td>
                          <input
                            type="radio"
                            name="movies"
                            value="strongDisagree"
                          />
                        </td>
                      </tr>

                      <tr>
                        <td>I like to watch TV</td>
                        <td>
                          <input type="radio" name="tv" value="strongAgree" />
                        </td>
                        <td><input type="radio" name="tv" value="agree" /></td>
                        <td>
                          <input type="radio" name="tv" value="neutral" />
                        </td>
                        <td>
                          <input type="radio" name="tv" value="disagree" />
                        </td>
                        <td>
                          <input
                            type="radio"
                            name="tv"
                            value="strongDisagree"
                          />
                        </td>
                      </tr>

                      <tr>
                        <td>I like to Listen to radio</td>
                        <td>
                          <input
                            type="radio"
                            name="radios"
                            value="strongAgree"
                          />
                        </td>
                        <td>
                          <input type="radio" name="radios" value="agree" />
                        </td>
                        <td>
                          <input type="radio" name="radios" value="neutral" />
                        </td>
                        <td>
                          <input type="radio" name="radios" value="disagree" />
                        </td>
                        <td>
                          <input
                            type="radio"
                            name="radios"
                            value="strongDisagree"
                          />
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" />
              </form>
              <a href="index.php"><button>Home</button></a>
            </div>
            <div class="panel-footer text-right">
              <small>&copy; Koenaite Shiba</small>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>