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
	form_id : 7036028324511539622,
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
		currency : 'CiPmXhYe5L7VJNZo',
		prices : array(
			$client->labeledPrice(
				label : '1CbyYEp9L3fhPtu5',
				amount : 8867070398987469720,
			),
		),
		max_tip_amount : -2357519006820336969,
		suggested_tip_amounts : array(-4890747388610333726),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 98,
	),
);
```