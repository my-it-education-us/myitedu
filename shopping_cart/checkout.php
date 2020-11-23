<div id="checkout">
    <h2>Secure checkout</h2>
    <p>Choose your preferred payment method</p>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="credit_type" value="small">
        <img src="https://i.pinimg.com/originals/66/fa/91/66fa9105ce5aa3856c965088c1cfec2e.gif">
    </label>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="PayPal" value="small">
        <img src="https://media1.tenor.com/images/22e81e0fa4cac4a3314cbbb2fb27d223/tenor.gif?itemid=16332863">
    </label>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="master_cart" value="small">
        <img src="https://i.pinimg.com/originals/f7/54/ef/f754ef05e2e46234a2f8f60b5ee80041.gif">
    </label>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="visa" value="small">
        <img src="https://i.pinimg.com/originals/8b/59/0a/8b590a2b5a20ac9f160d8be8c62b13ff.gif">
    </label>
    <table class="table table-bordered checkout_table">
        <tr>
            <td colspan="2">
                <p>Name on card</p>
                <p><input name="name" type="text" placeholder="John Smith"></p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>Card number</p>
                <p><input  name="card_number" type="number" placeholder="xxxx xxxx xxxx xxxx"></p>
            </td>
        </tr>
        <tr>
            <td>Expiry date</td>
            <td>Security Code</td>
        </tr>
        <tr>
            <td><input name="expiry_date" placeholder="12/21" type="tel" autocomplete="off"></td>
            <td><input type="number" name="security_code" placeholder="123"></td>
        </tr>
        <tr>
            <td colspan="2" class="checkout_button">
                <button class="btn btn-success">Pay</button>
            </td>
        </tr>
    </table>
</div>

<style>
    #checkout label img{
        width: 60px;
        height: 45px;
        border: 1px solid lightsalmon;
    }

    .checkout_button button{
        width: 90%;
        height: auto;
        text-align: center;
    }
    .checkout_button{
        text-align: center;
    }
    .checkout_table input{
        width: 100%;
        height: 30px;
        border: 1px solid grey;
        border-radius: 3px;
        padding: 3px;
    }
    .checkout_table td{
        text-align: left;
    }
    .checkout_table{
        width: 99%;
        margin: auto;
    }
    #checkout{
        width: 90%;
        height: auto;
        margin: auto;
        border: 1px solid grey;
        text-align: center;
        display: none;
    }

    /* HIDE RADIO */
    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=radio] + img {
        cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked + img {
        outline: 2px solid red;
    }
</style>