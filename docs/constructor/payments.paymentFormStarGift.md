# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 222

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
	form_id : -5686202067386926160,
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
		currency : 'aQh1X8AGf5OPpm72',
		prices : array(
			$client->labeledPrice(
				label : 'UN0HyMqmQYwGKrET',
				amount : -3601996140412440853,
			),
		),
		max_tip_amount : -7676167013540690659,
		suggested_tip_amounts : array(5591972725749131976),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 93,
	),
);
```