<div id="checkout">
    <h2>Secure checkout</h2>
    <p>Choose your preferred payment method</p>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="credit_type" value="small">
        <img src="https://pngimg.com/uploads/credit_card/credit_card_PNG19.png">
    </label>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="credit_type" value="small">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxJVLtfGJ-EXUPR7U2X25F9LwjEWL0RLGI2Q&usqp=CAU">
    </label>
    <label>
        <input value="cc" class="credit_types ct_cc" type="radio" name="credit_type" value="small">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuqNHHVlXzfK9w-ZFVk79z6t-hV_776DvX9w&usqp=CAU">
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
                <p><input name="card_number" type="number" placeholder="xxxx xxxx xxxx xxxx"></p>
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
        border: 1px solid #8c8c8c;
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
        outline: 2px solid #f00;
    }
</style>