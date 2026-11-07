# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 233

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
	form_id : 816127832784742622,
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
		currency : 'IghRqmDL8MKSAcrT',
		prices : array(
			$client->labeledPrice(
				label : 'LQwjhTgPtbOHX8N1',
				amount : 3150070925841075373,
			),
		),
		max_tip_amount : -3795720322665306976,
		suggested_tip_amounts : array(-3357258170523775829),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 87,
	),
);
```