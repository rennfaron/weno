<?php include("header.php"); ?>
        <section>
            <header class="page">
                <h1>
                    Join Weno Healthcare
                </h1>
                <h2>
                    It is quick and easy to join!
                </h2>
            </header>
        </section>
    </div>
	<section class="br-lightcyan">
        <div class="choose-type-of-account medium clearfix">
        	<h2 class="cyan-note">Just a few steps to complete.</h2>
			<h1>First things first, choose the type of account that works for you.</h1>
            <button type="button" class="cyan-rect btn-left">Healthcare Organization</button>
            <button type="button" class="cyan-rect btn-right">Patient or Personal User</button>
        </div>
    </section>
    <section class="br-lightcyan">
    	<div class="captcha medium clearfix">
            <button type="button" class="go-back">oops...do you need to go back?</button>
            <h1>Security Check</h1>
            <h2 class="gray-note">Enter both words below, seperated by a space</h2>
            <p><button type="button" class="captcha-regen">Can’t read this, Try Another.</button></p>
            <p><img width="293" height="55" /></p>
            <form>
                <p><input type="text" id="security-check"></p>
                <label for="security-check" class="security-check">Enter Text Here</label>
                <p class="before-submit">Make sure the information is correct  and continue to the next step by clicking submit</p>
                <div class="btn-submit">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
    </section>
    <section class="br-lightcyan">
    	<div class="medium clearfix">
            <button type="button" class="go-back">oops...do you need to go back?</button>
            <p class="account-choice">Hello Healthcare Organization</p>
            <h1>Please provide the Organization information</h1>
            <h2>We need to know a little bit about you to get things rolling</h2>
            <form class="information">
            	<div class="clearfix">
                    <label for="organization">
                        <input type="text" id="organization">
                        <span>Organization</span>
                    </label>
                    <label for="phone-number">
                        <input type="tel" id="phone-number">
                        <span>Phone Number</span>
                    </label>
                    <label for="fax-number">
                        <input type="tel" id="fax-number">
                        <span>Fax Number</span>
                    </label>
                    <label for="street-address">
                        <input type="text" id="street-address">
                        <span>Street Address</span>
                    </label>
                    <label for="city-town">
                        <input type="text" id="city-town">
                        <span>City / Town</span>
                    </label>
                    <label for="zip-code">
                        <input type="text" id="zip-code">
                        <span>Zip Code</span>
                    </label>
                    <label for="state">
                        <input type="text" id="state">
                        <span>State</span>
                    </label>
                </div>
                <p class="before-submit">Make sure the information is correct  and continue to the next step by clicking submit</p>
                <div class="btn-submit">
                    <input type="submit" value="submit">
                </div>
            </form>
		</div>
	</section>
    <section class="br-lightcyan">
    	<div class="medium clearfix">
            <button type="button" class="go-back">oops...do you need to go back?</button>
            <h1>Please provide the User information</h1>
            <h2>We are getting excited about you become a WENO member</h2>
            <form class="information">
            	<div class="clearfix">
                    <label for="admin-user-first-name">
                        <input type="text" id="admin-user-first-name">
                        <span>Admin User First Name</span>
                    </label>
                    <label for="admin-user-last-name">
                        <input type="text" id="admin-user-last-name">
                        <span>Admin User Last Name</span>
                    </label>
                    <label for="admin-email-address">
                        <input type="email" id="admin-email-address">
                        <span>Admin Email Address</span>
                    </label>
                    <label for="confirm-admin-user-email">
                        <input type="email" id="confirm-admin-user-email">
                        <span>Confirm Admin User Email</span>
                    </label>
                    <label for="confirm-user-email">
                        <input type="email" id="confirm-user-email">
                        <span>Confirm User Email</span>
                    </label>
                    <label for="service-type">
                        <select id="service-type">
                        	<option value="option-1">Option 1</option>
                            <option value="option-2">Option 2</option>
                            <option value="option-3">Option 3</option>
                        </select>
                        <span>Select Service Type</span>
                    </label>
                </div>
                <p class="before-submit">Make sure the information is correct  and continue to the next step by clicking submit</p>
                <div class="btn-submit">
                    <input type="submit" value="submit">
                </div>
            </form>
		</div>
	</section>
    <section class="br-lightcyan">
    	<div class="medium clearfix">
            <button type="button" class="go-back">oops...do you need to go back?</button>
            <h1>You&rsquo;re almost done!</h1>
            <h2>Complete this last section of information to become a member</h2>
            <form class="information">
            	<div class="clearfix">
                    <label for="insurance-accepted">
                        <input type="text" id="insurance-accepted">
                        <span>Insurance Accepted</span>
                    </label>
                    <label for="choose-your-membership-type">
                        <input type="text" id="choose-your-membership-type">
                        <span>Choose your membership type</span>
                    </label>
                    <label for="extend-your-service-area">
                        <input type="text" id="extend-your-service-area">
                        <span>Extend your service area</span>
                    </label>
                    <label for="payment-method">
                        <input type="text" id="payment-method">
                        <span>Payment Method</span>
                    </label>
                    <label for="accept-agreement">
                        <input type="text" id="accept-agreement">
                        <span>Accept Agreement</span>
                    </label>
                </div>
                <p class="before-submit">Make sure the information is correct  and continue to the next step by clicking submit</p>
                <div class="btn-submit">
                    <input type="submit" value="submit">
                </div>
            </form>
		</div>
	</section>
    <section class="br-lightcyan last-child">
    	<div class="medium clearfix">
            <button type="button" class="go-back">oops...do you need to go back?</button>
            <h1 class="done">You&rsquo;re done!</h1>
            <h2 class="done">You should be receiving an email&hellip; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor tortor ut felis vehicula pulvinar. Donec at nulla urna, id imperdiet odio</h2>
            <p class="thank-you">Thank you.</p>
            <figure class="thank-you-weno"></figure>
		</div>
        <button type="button" class="go-top">Go Back to Top</button>
    </section>
    <section class="use-desktop mobile">
    	<h1>Please use a desktop computer to join Weno.</h1>
    </section>
<?php include("footer.php"); ?>