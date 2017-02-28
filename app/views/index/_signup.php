<section>
    <form id="signUpForm" action='<?= URL . 'submit'; ?>' method='post' class="inline-block">
        <div class='form-group inline-block'>
            <label>First Name</label>
            <input type='text' name='firstName'/>
        </div>
        <div class='form-group inline-block'>
            <label>Last Name</label>
            <input type='text' name='lastName' />
        </div>
        <div class='form-group block'>
            <label>Email</label>
            <input type='email' name='email' />
        </div>
        <div class='form-group block'>
            <button>Submit</button>
            <span id='submissionResponse'></span>
        </div>
    </form>
    <div id='formTitleGroup' class="inline-block">
        <h2>
            Interested?
        </h2>
        <h4>Join our mailing list. We won't send you spam.</h4>
    </div>
</section>