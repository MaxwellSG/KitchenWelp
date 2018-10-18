
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1 style="margin-bottom: 10px;">Shipping and Credit Information</h1>
      <p style="margin-bottom: 20px;">Please fill in this form to complete your order</p>
      <hr>
      <label for="billing address"><b>Billing Address</b></label>
      <input class="modular_input" type="text" placeholder="Billing Address" name="billing_address" required>

      <label for="Credit"><b>Card Number</b></label>
      <input class="modular_input" type="text" placeholder="xxx-xxx-xxxx" name="credit_card_number" required>

      <label for="securitycode"><b>Security Code</b></label>
      <input class="modular_input" type="text" placeholder="xxx" name="securitycode" required>

      <label for="Street address"><b>Shipping Address</b></label>
      <input class="modular_input" type="text" placeholder="Street Address" name="streat_address" required>

      <label for="zip"><b>Zip Code</b></label>
      <input class="modular_input" type="text" placeholder="Zip Code" name="zip" required>

      <label for="name"><b>Name</b></label>
      <input class="modular_input" type="text" placeholder="Name" name="name" required>

    <!--  <label>
        <input class="modular_input" type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label> -->

      <p>By clicking submit you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="purchasebtn">Purchase</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
