<div class="row">
    <div class="twelve columns">
        <form id="contact_form" action="/contact" method="post">
            <fieldset class="panel">
                <legend>Contact show coordinator, Randy Phelps for ticket sales, questions, or other information.</legend>
                
                <div class="row">
                    <label class="four columns"><input id="name" type="text" name="name" placeholder="Your Name" required ></label>
                    <label class="four columns"><input id="phone" type="tel" name="phone" placeholder="Your Phone #" required ></label>
                    <label class="four columns"><input id="email" type="email" name="email" placeholder="Your Email" required ></label>
                </div>
                
                <div class="row">
                    <label for="comment" class="twelve columns"><textarea id="comment" name="comment" placeholder="Enter your comment or question" rows="6"></textarea></label>
                </div>
                
                <input class="secondary button radius right" type="submit" value="Send"/>
            </fieldset>
        </form>
    </div>
</div>