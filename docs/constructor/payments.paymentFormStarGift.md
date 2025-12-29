# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 218

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
	form_id : -3619012664795806416,
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
		currency : 'xAwESYFs97HoQ2CW',
		prices : array(
			$client->labeledPrice(
				label : 'NszXjMTqZ142rPWS',
				amount : -891336378955908599,
			),
		),
		max_tip_amount : 34593312648587809,
		suggested_tip_amounts : array(-2487431639168976495),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 30,
	),
);
```