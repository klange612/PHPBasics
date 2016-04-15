<?php ?>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="W5K8DD7NP26PY">
<table>
<tr>
	<th>
		<input type="hidden" name="on0" value="Size">
		<label for"os0">Size</label>
	</th>
	<td><select name="os0" id="os0">
		<option value="Small">Small </option>
		<option value="Medium">Medium </option>
		<option value="Large">Large </option>
		</select> 
	</td>
</tr>
</table>
<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
<input type="submit" value="Add to Cart" name="submit">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

