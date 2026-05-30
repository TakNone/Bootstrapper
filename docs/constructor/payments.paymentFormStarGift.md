# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 225

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
	form_id : 4513849209142521224,
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
		currency : 'E7ntOQLShmMo8GBx',
		prices : array(
			$client->labeledPrice(
				label : 'Kk9Ztb7vDQoWXHOr',
				amount : -8467968077576640262,
			),
		),
		max_tip_amount : -7458675217270673880,
		suggested_tip_amounts : array(-1698514668894978546),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 33,
	),
);
```