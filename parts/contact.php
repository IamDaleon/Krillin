<div class="container containersection">
    <h2 class="cntitler">Contact us!</h2>
<hr class="condenser"/>
  <form action="action_page.php">

    <div class="row">
        <div class="col">
            <label for="fname" class="fnametitler">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        </div>
        <div class="col">
            <label for="lname" class="fnametitler">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        </div>
    </div>

    <label for="country" class="fnametitler">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject" class="fnametitler">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:450px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>