<?php if(isset($_GET['type'])) { ?>
          <?php if($_GET['type'] == 'user') { ?>
            <form action="#" id="userAuth">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="name" id="name">
                <label class="mdl-textfield__label" for="name">Name *</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="address" id="address">
                <label class="mdl-textfield__label" for="address">Address *</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="contact" id="contact" pattern="[1,7,8,9][0-9]{9}">
                <label class="mdl-textfield__label" for="contact">Contact No *</label>
                <span class="mdl-textfield__error">Contact No. must be 10-digit long with valid digits!</span>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="date" name="dob" id="dob" pattern="(?:19|20)[0-9]{2}(/|-)(?:(?:0[1-9]|1[0-2])(/|-)(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])(/|-)(?:30))|(?:(?:0[13578]|1[02])(/|-)31))">
                <label class="mdl-textfield__label" for="date">Date of Birth(YYYY-MM-DD) *</label>
                <span class="mdl-textfield__error">Enter a valid Date of Birth!</span>
              </div>
              <div class="radio">
                Sex *: 
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                  <input class="mdl-radio__button" name="sex" type="radio" id="male" value="Male">
                  <span class="mdl-radio__label" for="male">Male</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                  <input class="mdl-radio__button" name="sex" type="radio" id="female" value="Female">
                  <span class="mdl-radio__label" for="female">Female</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                  <input class="mdl-radio__button" name="sex" type="radio" id="other" value="Other">
                  <span class="mdl-radio__label" for="other">Other</span>
                </label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="job" id="job">
                <label class="mdl-textfield__label" for="job">Occupation</label>
              </div>
              <div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="img_btn">
                  <i class="material-icons">cloud_upload</i> Choose Image
                </button>
                <input type="file" accept="image/*" name="image" id="image"/>
                <span id="content"></span>
              </div>
            </form>
            <?php } else if($_GET['type'] == 'lib') { ?>
              <form action="#" id="libAuth">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="name" id="name">
                  <label class="mdl-textfield__label" for="name">Name *</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="address" id="address">
                  <label class="mdl-textfield__label" for="address">Address *</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="contact" id="contact" pattern="[1,7,8,9][0-9]{9}">
                  <label class="mdl-textfield__label" for="contact">Contact No *</label>
                  <span class="mdl-textfield__error">Contact No. must be 10-digit long with valid digits!</span>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="date" name="estd" id="estd" pattern="(?:19|20)[0-9]{2}(/|-)(?:(?:0[1-9]|1[0-2])(/|-)(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])(/|-)(?:30))|(?:(?:0[13578]|1[02])(/|-)31))">
                  <label class="mdl-textfield__label" for="estd">Date of Establishment(YYYY-MM-DD) *</label>
                  <span class="mdl-textfield__error">Enter a valid Date of Establishment!</span>
                </div>
                <div>
                  <label for="mode">Mode of Library *</label>
                  <select id="mode" name="mode">
                    <option value="" selected>--Select One Option--</option>
                    <option value="Academic">Academic</option>
                    <option value="Reading">Reading</option>
                    <option value="Primary">Primary</option>
                    <option value="Rural">Rural</option>
                    <option value="Town">Town</option>
                    <option value="District">District</option>
                    <option value="Central">Central</option>
                    <option value="National">National</option>
                    <option value="Foreign">Foreign</option>
                    <option value="Special">Special</option>
                  </select>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="book_count" id="book_count">
                  <label class="mdl-textfield__label" for="book_count">Book(s) per Member *</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="time" name="open_time" id="open_time">
                  <label class="mdl-textfield__label" for="open_time">Opening Time</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="time" name="close_time" id="close_time">
                  <label class="mdl-textfield__label" for="close_time">Closing Time</label>
                </div>
                <div>
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="img_btn">
                    <i class="material-icons">cloud_upload</i> Choose Image
                  </button>
                  <input type="file" accept="image/*" id="image"/>
                  <span id="content"></span>
                </div>
              </form>
              <?php } ?>

            </div>
            <script type="text/javascript">
              document.getElementById('img_btn').addEventListener('click', function(evt) {
                document.getElementById('image').click();
              });
              document.getElementById('image').addEventListener('change', function(evt) {
                document.getElementById('content').innerHTML = evt.target.value.split('\\').pop();
              });
            </script>
            <div class="mdl-card__actions mdl-card--border">
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="authBtn">Continue</button>
            </div>
            <div class="mdl-card__menu">
                  * Required Field
            </div>
          </div>
        </div>
      </div>
      <?php } ?>