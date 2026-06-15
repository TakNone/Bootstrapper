# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 227

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
	form_id : 1284248407070077394,
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
		currency : 'CFZ5nN7zSJdE2rpX',
		prices : array(
			$client->labeledPrice(
				label : 'jaUEpWG0Khy8A1Dz',
				amount : -2814189003537305332,
			),
		),
		max_tip_amount : -312302824029548416,
		suggested_tip_amounts : array(7410701177866591515),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 16,
	),
);
```