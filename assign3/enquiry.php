<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | Rent</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/style-mobile.css"/>
</head>

<body>
  <?php
    include_once("header.php");
  ?>

  <main>
    <form name="form-rent" action="#">
      <fieldset>
        <legend>
          Persona<span class="no-letter-spacing">l</span>
        </legend>

        <div class="form__grid">
          <label for="name">Name: </label>
          <div>
            <input id="name" name="first_name" type="text" placeholder="First Name" />
            <input name="last_name" type="text" placeholder="Last Name" />
          </div>

          <label for="email">Email Address: </label>
          <input id="email" name="email" type="text" placeholder="youremail@email.com" />

          <label for="tele">Telephone Number: </label>
          <div>
            <input id="tele" name="tele_front" type="text" size="1" placeholder="012" />
            <span class="form__col-2">-</span>
            <input name="tele_back" type="text" size="7" placeholder="3456789" />
          </div>
        </div>
      </fieldset>

      <fieldset>
        <legend>
          Addres<span class="no-letter-spacing">s</span>
        </legend>

        <div class="form__grid">
          <label for="street">Street Address: </label>
          <input id="street" name="street_address" type="text" />

          <label for="city">City/Town: </label>
          <input id="city" name="city" type="text" />

          <label for="state">State: </label>
          <select name="state" id="state" size="1">
            <option value="">State</option>

            <optgroup label="East Malaysia">
              <option value="sabah">Sabah</option>
              <option value="sarawak">Sarawak</option>
              <option value="labuan">Labuan</option>
            </optgroup>

            <optgroup label="West Malaysia">
              <option value="johor">Johor</option>
              <option value="kedah">Kedah</option>
              <option value="kelantan">Kelantan</option>
              <option value="kl">Kuala Lumpur</option>
              <option value="melaka">Melaka</option>
              <option value="negeri_sembilan">Negeri Sembilan</option>
              <option value="pahang">Pahang</option>
              <option value="penang">Penang</option>
              <option value="perak">Perak</option>
              <option value="perlis">Perlis</option>
              <option value="putrajaya">Putrajaya</option>
              <option value="selangor">Selangor</option>
              <option value="terengganu">Terengganu</option>
            </optgroup>
          </select>

          <label for="postcode">Postcode: </label>
          <input id="postcode" name="postcode" type="text" />
        </div>
      </fieldset>

      <fieldset>
        <legend>
          Product<span class="no-letter-spacing">s</span>
        </legend>

        <div class="form__grid">
          <label for="product-code">Product Code: </label>
          <select name="product-code" id="product-code" size="1">
            <option value="">Product Code</option>
          </select>

          <label for="subject">Subject: </label>
          <input type="text" id="subject" name="subject" value="" readonly="readonly"/>

          <label for="duration">Rental Duration: </label>
          <div>
            <input id="duration" name="duration" type="text" size="2" />
            <span class="form__col-2">week(s)</span>
          </div>

          <label for="comments">Comments: </label>
          <textarea id="comments" name="comments" rows="4"></textarea>
        </div>
      </fieldset>

      <div class="form__btns">
        <input id="btn-reset" class="btn form__btn" type="reset" value="Reset" />
        <input id="btn-submit" class="btn form__btn" type="submit" value="Submit" />
      </div>
    </form>
  </main>

  <?php
    include_once("footer.php");
  ?>

  <!-- JS -->
  <script src="script/enhancements.js"></script>
  <script src="script/script.js"></script>
</body>

</html>
