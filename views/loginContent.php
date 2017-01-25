<!-- Login Page Contents -->
          <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
              <a href="#login" class="mdl-tabs__tab is-active">Login</a>
              <a href="#signup" class="mdl-tabs__tab">Sign Up</a>
            </div>    
            <div class="mdl-tabs__panel is-active" id="login">
              <!-- Login Form Starts -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone mdl-cell--3-offset-desktop mdl-cell--2-offset-tablet">
                  <div class="wide-card mdl-card mdl-shadow--2dp" id="loginForm">
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text">Login Form</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="user_name">
                          <label class="mdl-textfield__label" for="user_name">User Name</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="password" id="password">
                          <label class="mdl-textfield__label" for="password">Password</label>
                        </div>
                        <div class="radio">
                          You are: 
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                            <input class="mdl-radio__button" name="type" type="radio" id="type_u">
                            <span class="mdl-radio__label" for="type_u">User</span>
                          </label>
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                            <input class="mdl-radio__button" name="type" type="radio" id="type_l">
                            <span class="mdl-radio__label" for="type_l">Library</span>
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="loginBtn">Login</button>
                    </div>
                    <div class="mdl-card__menu">
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect modal__trigger" id="forgotBtn" data-modal="#forgot">Forgot Password</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Login Form Ends -->
              <!-- Forgot Password -->
              <div id="forgot" class="modal modal__bg">
                <div class="modal__dialog">
                  <div class="modal__content">
                    <div class="modal__header">
                      <div class="modal__title">
                        <h2 class="modal__title-text">Forgot Password</h2>
                      </div>
                      <span class="mdl-button mdl-button--icon mdl-js-button  material-icons  modal__close"></span>
                    </div>
                    <div class="modal__text">
                      <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="user_name">
                          <label class="mdl-textfield__label" for="user_name">User Name</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="email" id="email">
                          <label class="mdl-textfield__label" for="email">Email</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="password" id="npassword">
                          <label class="mdl-textfield__label" for="npassword">New Password</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="password" id="cpassword">
                          <label class="mdl-textfield__label" for="cpassword">Confirm Password</label>
                        </div>
                        <div class="radio">
                          You are: 
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                            <input class="mdl-radio__button" name="type" type="radio" id="usr_log" value="User">
                            <span class="mdl-radio__label" for="usr_log">User</span>
                          </label>
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                            <input class="mdl-radio__button" name="type" type="radio" id="lib_log" value="Library">
                            <span class="mdl-radio__label" for="lib_log">Library</span>
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="modal__footer">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-button--raised mdl-js-ripple-effect">Reset</a>
                      <a class="mdl-button mdl-button--colored mdl-js-button  modal__close">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mdl-tabs__panel" id="signup">
              <!-- Signup Form Starts -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--2-offset-tablet">
                  <div class="wide-card mdl-card mdl-shadow--2dp" id="signupForm">
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text">Sign Up Form</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" name="email" type="email" id="email">
                          <label class="mdl-textfield__label" for="email">Email</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" name="uname" type="text" id="user_name">
                          <label class="mdl-textfield__label" for="user_name">User Name</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" name="pass" type="password" id="password">
                          <label class="mdl-textfield__label" for="password">Password</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" name="cpass" type="password" id="cpassword">
                          <label class="mdl-textfield__label" for="cpassword">Confirm Password</label>
                        </div>
                        <div class="radio">
                          You are: 
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                            <input class="mdl-radio__button" name="type" type="radio" id="type_u" value="User">
                            <span class="mdl-radio__label" for="type_u">User</span>
                          </label>
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                            <input class="mdl-radio__button" name="type" type="radio" id="type_l" value="Library">
                            <span class="mdl-radio__label" for="type_l">Library</span>
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="signupBtn">Sign Up</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Signup Form Ends -->
            </div>
          </div>
