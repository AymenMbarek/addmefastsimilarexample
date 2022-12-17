<!doctype html>
<html>
<head>
  <!-- 1: References the Square payment library to initalize the SDK -->
  <script src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
  <script type="text/javascript">const payments = Square.payments(appId, locationId);

const ach = await payments.ach()

const achButton = document.getElementById('ach-button')
const buyerNameField = document.getElementById('buyer-name-field');
achButton.onclick = () => {
  const tokenResult = ach.tokenize({ accountHolderName: buyerNameField.value });

  // Process payment with tokenResult
}
const paymentRequest = payments.paymentRequest({
  countryCode: 'US',
  currencyCode: 'USD',
  total: {
    amount: '5.79',
    label: 'Total'
  },
  requestShippingContact: true,
});

paymentRequest.addEventListener('afterpay_shippingaddresschanged', function (contact) {
  return {
    shippingOptions: [
      {
        id: 'FREE',
        amount: '0.00',
        label: 'Free',
        taxLineItems: [
          {
            id: 'taxItem1',
            label: 'Taxes',
            amount: '3.50',
          }
        ],
        total: {
          amount: '9.29',
          label: 'Total'
        }
      }
    ],
  }
});

const afterpayClearpay = await payments.afterpayCleapay(paymentRequest);
await afterpayClearpay.attach('#afterpay');


afterpayClearpayButton.onclick = async () => {
  const tokenResult = await afterpayClearpay.tokenize();

  // Pass the TokenResult to your server to complete the payment
}
</script>
</head>
<body>
  <form id="payment-form">
    <div id="card-container"></div>
    <button id="card-button" type="button">Pay</button>
  </form>
  <!-- Configure the Web Payments SDK and Card payment method -->
  <script type="text/javascript">
    async function main() {
      const payments = Square.payments(APPLICATION_ID, LOCATION_ID);
      const card = await payments.card();
      await card.attach('#card-container');

      async function eventHandler(event) {
        event.preventDefault();

        try {
          const result = await card.tokenize();
          if (result.status === 'OK') {
            console.log(`Payment token is ${result.token}`);
          }
        } catch (e) {
          console.error(e);
        }
      };

      const cardButton = document.getElementById('card-button');
      cardButton.addEventListener('click', eventHandler);
    }

    main();
  </script>
</body>

</html>