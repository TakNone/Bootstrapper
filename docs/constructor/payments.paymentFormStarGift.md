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
	form_id : 3319602816701778442,
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
		currency : 'NHnmjCQw5EgWydpG',
		prices : array(
			$client->labeledPrice(
				label : 'tSclIRAMxLYjGpgi',
				amount : -4179840342947412671,
			),
		),
		max_tip_amount : -197850169985313364,
		suggested_tip_amounts : array(-5500160823501811348),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 38,
	),
);
```