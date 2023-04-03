<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <section class="container">
      <header>CV Form</header>
      <form action="cv_view.php" method="post" class="form">
        <div class="input-box">
          <label>Name</label>
          <input type="text" name="name" placeholder="Enter Name" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Education</label>
            <input type="text" name="education" placeholder="Enter your education" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="birht" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="male" <?php if(isset($gender) && $gender == "male") echo "checked"; ?>/>
              Male
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="female" <?php if(isset($gender) && $gender == "male") echo "checked"; ?> />
              Female
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Phone</label>
          <input type="text"  name="phone" placeholder="Enter your phone" required />
        </div>
        <div class="input-box">
          <label>Experince</label>
          <input type="text" name="experince" placeholder="Enter Experince" required />
        </div>
        <button>Submit</button>
      </form>
    </section>
</body>
</html>
