# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 229

```tl
payments.paymentFormStarGift#b425cfe1 form_id:long invoice:Invoice = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>form_id</mark> | [`long`](type/long) | Form ID |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |

---

## Type

[payments.PaymentForm](type/payments.PaymentForm)

---

## Example

```php
$paymentsPaymentForm = $client->payments->paymentFormStarGift(
	form_id : -4338647643626015143,
	invoice : $client->invoice(
		test : true,
		name_requested : true,
		phone_requested : true,
		email_requested : true,
		shipping_address_requested : true,
		flexible : true,
		phone_to_provider : true,
		email_to_provider : true,
		recurring : true,
		currency : 'wg8yDtLqduRA6OKz',
		prices : array(
			$client->labeledPrice(
				label : 'BAuvC1wpORGUlfF7',
				amount : 5159509936049015903,
			),
		),
		max_tip_amount : 5970222813416377822,
		suggested_tip_amounts : array(975822755260621172),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 1,
	),
);
```