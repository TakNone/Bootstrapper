# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 211

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
	form_id : -3872583384044249248,
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
		currency : 'vKoWHC7dAm8sO3iQ',
		prices : array(
			$client->labeledPrice(
				label : 'mYCaT1ySoHqQVufF',
				amount : -7986439580607480381,
			),
		),
		max_tip_amount : -7300943361435848664,
		suggested_tip_amounts : array(-1950075312124308107),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 15,
	),
);
```