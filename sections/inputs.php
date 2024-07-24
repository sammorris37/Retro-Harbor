<div class="container" id="inputs">
    <h2>Inputs</h2>
    <p>This framework provides customizable default input styles that can be tailored to meet your specific requirements.</p>

<form action="#" method="post">

    <fieldset>

        <legend>Legend</legend>

        <div class="field-group">
            <input type="text" id="name" name="name" placeholder=" " required>
            <label for="name">Text <span class="required">*</span></label>
        </div>
      
        <div class="field-group">
            <input type="email" id="email" name="email" placeholder=" " required>
            <label for="email">Email <span class="required">*</span></label>
        </div>
      
        <div class="field-group password-container">
                <input type="password" id="password" name="password" placeholder=" " required>
                <label for="password">Password <span class="required">*</span></label>
                <span class="toggle-password" onclick="togglePassword()" title="Show/Hide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <g class="nc-icon-wrapper" stroke-width="2" fill="currentColor" stroke="currentColor">
                        <path d="M1.373,13.183a2.064,2.064,0,0,1,0-2.366C2.946,8.59,6.819,4,12,4s9.054,4.59,10.627,6.817a2.064,2.064,0,0,1,0,2.366C21.054,15.41,17.181,20,12,20S2.946,15.41,1.373,13.183Z" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"></path>
                        <circle data-color="color-2" cx="12" cy="12" r="4" fill="none" stroke-linecap="square" stroke-miterlimit="10"></circle>
                    </g>
                    </svg>
                </span>
        </div>

        <div class="field-group">
            <input type="tel" id="phone" name="phone" placeholder=" ">
            <label for="phone">Phone Number</label>
        </div>

        <div class="field-group--select">
            <label for="select">Select</label>
            <select id="select" name="select">
                <option>Select an option...</option>
                <option value="usa">USA</option>
                <option value="canada">Canada</option>
                <option value="uk">UK</option>
            </select>
        </div>

        <div class="field-group--message">
            <textarea id="message" name="message" rows="6" placeholder=" "></textarea>
            <label for="message">Message</label>
        </div>

        <div class="field-group--radio-checkbox">
            <input type="radio" id="example-radio" name="radio" value="example-radio">
            <label for="example-radio">Radio Example</label>
        </div>

        <div class="field-group--radio-checkbox">
            <input type="checkbox" id="example-checkbox" name="checkbox" value="example-checkbox">
            <label for="example-checkbox">Checkbox Example</label>
        </div>

    </fieldset>
    
   

   <button type="submit" class="button">Submit</button>
   <input type="reset" class="button" value="Reset">
</form>

<script>
    function togglePassword() {    
        const passwordField = document.getElementById('password');
        const passwordToggle = document.querySelector('.toggle-password');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g class="nc-icon-wrapper" stroke-width="2" fill="currentColor" stroke="currentColor"><path d="M1.373,13.183a2.064,2.064,0,0,1,0-2.366C2.946,8.59,6.819,4,12,4s9.054,4.59,10.627,6.817a2.064,2.064,0,0,1,0,2.366C21.054,15.41,17.181,20,12,20S2.946,15.41,1.373,13.183Z" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"></path><circle data-color="color-2" cx="12" cy="12" r="4" fill="none" stroke-linecap="square" stroke-miterlimit="10"></circle><line data-color="color-2" x1="2" y1="22" x2="22" y2="2" fill="none" stroke-linecap="square" stroke-miterlimit="10"></line></g></svg>'; // Change icon to "hide" version
            } else {
                passwordField.type = 'password';
                passwordToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g class="nc-icon-wrapper" stroke-width="2" fill="currentColor" stroke="currentColor"><path d="M1.373,13.183a2.064,2.064,0,0,1,0-2.366C2.946,8.59,6.819,4,12,4s9.054,4.59,10.627,6.817a2.064,2.064,0,0,1,0,2.366C21.054,15.41,17.181,20,12,20S2.946,15.41,1.373,13.183Z" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"></path><circle data-color="color-2" cx="12" cy="12" r="4" fill="none" stroke-linecap="square" stroke-miterlimit="10"></circle></g></svg>'; // Change icon to "show" version
            }
    }
</script>

</div>