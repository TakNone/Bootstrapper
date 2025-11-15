# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 216

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
	form_id : -6292214986513252138,
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
		currency : 'NevMbiItoXq8rPsz',
		prices : array(
			$client->labeledPrice(
				label : 'xBaFKHe0NAWRVCiT',
				amount : 8828036323259093284,
			),
		),
		max_tip_amount : -6161269550557219056,
		suggested_tip_amounts : array(-6753840036586236613),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 64,
	),
);
```