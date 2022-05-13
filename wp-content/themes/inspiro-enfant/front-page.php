<?php get_header()?>
<h1>admin-ajax.php Example</h1>

<form id="contact-form">

  <input type="text" name="name" placeholder="Your Name" />

  <input type="email" name="email" placeholder="Your Email" />
  
  <select name="gender">
    <option>Male</option>
    <option>Female</option>
  </select>

  <input type="hidden" name="action" value="send_contact_form" />

  <button type="submit">Submit</button>

</form>

<h1>Rewrite API Example</h1>
<button id="get_store">Get Store From Rewrite API</button>

<h1>REST API Example</h1>
<button id="get_store_rest">Get Store From REST API</button>
    
<?php get_footer()?>