<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>E N H A N C E M E N T S _ 2</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"/>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  <link rel="stylesheet" type="text/css" href="styles/style-mobile.css"/>
</head>
<body>
  <h1 class="enhancement__title">
    Enhancements<span class="no-letter-spacing">2</span>

    <a href="enhancements.php" class="enhancement__btn enhancement__btn--left is-pos-y-center">&#60;</a>
    <a href="phpenhancements.php" class="enhancement__btn enhancement__btn--right is-pos-y-center">&#62;</a>
  </h1>

  <article class="info enhancement__info">
    <img class="enhancement__long" src="images/enhancement2_1.jpg" alt="Preview Page"/>

    <h2 class="text-accent">Preview Page</h2>

    <p>
      When completing a form, it is very likely for the user to enter values that are inaccurate but fit the criteria of the input, like misspelling a name or enter the wrong number. Thus, it is better to provide the user a way of checking and confirming their inputs before submitting the form.
    </p>

    <p>
      To achieve this, values from the form are stored in the sessionStorage. Using the sessionStorage, values can be transferred to other webpages for use, thus it is useful for this context. The values are then obtained and displayed in another page for the user to confirm their inputs.
    </p>

    <p>
      In context of this assignment, values within the form in the enquiry.php page are stored and then sent to confirmation.php after clicking the "Submit" button. You may try it out by filling the form in <a class="link-underline" href="enquiry.php">enquiry.php</a> and clicking "Submit".
    </p>

    <hr/>
  </article>

  <article class="info enhancement__info">
    <img class="enhancement__short" src="images/enhancement2_2.jpg" alt="Mobile Navigation Bar"/>

    <h2 class="text-accent">Mobile Navigation Bar</h2>

    <p>
      In order to create fluid and responsive website, the layout of the website should change and rescale in order to conform to the device width and height. This is the same for the navigation bar. On a mobile device, the long navigation bar that can be seen on a desktop or tablet will not be as suitable, thus a different navigation bar should be used for mobile devices with small screens.
    </p>

    <p>
      Thus, to achieve this, a navigation bar that contains a button to further open a list of links was used for this website. In order to create this "drawer" functionality, JS was used to toggle the displaying of the links. When the button is clicked, the event will change the display of the list based on its current value. If it is open, then it will close and vice versa. Example of this feature can be seen anywhere on the website, such as <a href="index.php" class="link-underline">index.php</a>.
    </p>

    <hr/>
  </article>

  <article class="info enhancement__info">
    <img class="enhancement__long" src="images/enhancement2_3.jpg" alt="Display Change"/>

    <h2 class="text-accent">Display Change</h2>

    <p>
      Given a product, there may be multiple categories, and they may even have sub-categories in each category. This was the case for this website, and since the number of products in each sub-category was not enough to warrant the creation of another page, JS was used to display different sub-categories at a given moment.
    </p>

    <p>
      To achieve this, the content of each sub-category were placed in seperate divs. These divs were then stored in a list in JS, along with buttons that correspond to these divs. When a certain button is clicked, the corresponding sub-category will be displayed while hiding the others. Examples of this feature can be seen from any <a href="product1.php" class="link-underline">product*.php</a>.
    </p>

    <hr/>
  </article>

  <article class="info enhancement__info">
    <h2 class="text-accent">Regular Expressions</h2>

    <p>
      Regular expressions, or RegEx for short, are used to check strings for a match with a given pattern. These can be used in many different ways, such as to check input to see if they fit a certain criteria, or to find specific words in a long paragraph. RegEx is used in this website to validate form input based on certain criteria.
    </p>

    <p>
      To do this, a simple ".match" method can be used to check a string according to a given pattern. The complex part is the RegEx, as it has its own syntax to form patterns that match different criteria. Example of uses of RegEx in this assignment is in the <a href="" class="link-underline">enquiry.php</a>.
    </p>

    <hr/>
  </article>



  <article class="info enhancement__info">
    <h2 class="text-accent">HTML Form Element</h2>

    <p>
      To access inputs in a form, the HTML Form Element was used. This is done by just indexing the document.forms attribute, like "document.forms["formname"]". This will return the form element which can then be used to access input values or other attributes. In this assignment, the form element was used to obtain values from the inputs, to manipulate the "onsubmit" event of the form and to also set values into the inputs. This feature is used in <a href="enquiry.php" class="link-underline">enquiry.php</a> and <a href="confirmation.php" class="link-underline">confirmation.php</a>
    </p>

    <hr/>
  </article>

  <a href="index.php" class="btn is-pos-x-center">Back To Site</a>
</body>
</html>
