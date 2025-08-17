# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here » for more info*

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
	form_id : -6254800000754989805,
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
		currency : 'pXmfaPZ5sBiFD0oy',
		prices : array(
			$client->labeledPrice(
				label : '4fLFyIDmXZOHqAwr',
				amount : 2890401401524214298,
			),
		),
		max_tip_amount : 4349834997995395093,
		suggested_tip_amounts : array(-5518423372296768968),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 68,
	),
);
```