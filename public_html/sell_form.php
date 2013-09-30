
<html>
<body>

<h2>Sell Form</h2>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'custom',
    custom_theme_widget: 'recaptcha_widget'
 };
 </script>
<form name="sellform" method="post" action="sell_form_action.php" enctype="multipart/form-data">
<table width="550px" style="font-size:15px; font-family:Cambria;" cellpadding="7px">
</tr>
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30" required="required" placeholder="Your first name..." >
 </td>
</tr>
 
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30" required="required" placeholder="Your Last name...">
 </td>
</tr>

<tr>
 <td valign="top"">
  <label for="product">Product Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="product" maxlength="50" size="30" required="required" placeholder="Product name...">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="price">Price *</label>
 </td>
 <td valign="top">
  <input  type="text" name="price" maxlength="50" size="30" required="required" placeholder="Price...">
 </td>
</tr>


<tr>
 <td valign="top">
  <label for="negotiation">Negotiation % *</label>
 </td>
 <td valign="top">
  <input  type="text" name="negotiation" maxlength="50" size="30" required="required" placeholder="Negotiation %(Price below which you can't sell) ">
 </td>
</tr>



<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" required="required" placeholder="Email id..">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number *</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30" required="required" placeholder="contact number..">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="file_upload">Image of product *</label>
 </td>
 <td valign="top">
<label for="file"></label>
<input type="file" name="file" id="file" required="required"><br> </td>
</tr>

<tr>
 <td valign="top">
  <label for="comments">Condition of product *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6" required="required"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" class="submit">
  </td>
</tr>
<span style="color: #c43b1d;font: normal 15px arial,sans-serif;">* Required </span>
</table>
</form>
<script>
var RecaptchaOptions = {
   theme : 'white',
   tabindex : 2
};
</script>
</body>
</html>