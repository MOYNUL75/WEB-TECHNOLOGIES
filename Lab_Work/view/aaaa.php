<!DOCTYPE html>
<head>
    <title>Order Form</title>
</head>
<body>
    <form>
        <fieldset>
            <legend>Order Information</legend>
            
            <table>
                
                <tr>
                    <td>Product:</td>
                    <td>
                        <select>
                            <option value="product1">Product 1</option>
                            <option value="product2">Product 2</option>
                            <option value="product3">Product 3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Quantity:</td>
                    <td><input type="number" name="quantity" min="0"></td>
                </tr>

                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Email Address:</td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>Phone Number:</td>
                    <td><input type="tel" name="phone"></td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><textarea type="address" name="address"></textarea></td>
                </tr>

                <tr>
                    <td>Billing Address:</td>
                    <td><textarea id="billing-address" name="billing-address"></textarea></td>
                </tr>

                <tr>
                    <td>Shipping Option:</td>
                    <td>
                        <input type="radio"  name="shipping" value="standard" checked>Standard Shipping
                        <input type="radio"  name="shipping" value="express">Express Shipping (additional charges may apply)
                    </td>
                </tr>

                <tr>
                    <td>Preferred Delivery Time:</td>
                    <td>
                        <select id="delivery-time" name="delivery-time">
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Special Instructions:</td>
                    <td><textarea type="instructions" name="instructions"></textarea></td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="express-shipping">Request Express Shipping (additional charges may apply)
                        <input type="checkbox" name="gift-wrapping">Gift Wrapping (additional charges may apply)
                        <br>
                        I agree to the terms and conditions. <input type="checkbox" name="terms">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" onclick= "alert('Order Submitted')" value="Submit">
                        <input type="reset"  onclick= "alert('Reset order information')"  value="Reset">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</body>
</html>
