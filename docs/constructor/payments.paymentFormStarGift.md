# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 214

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
	form_id : 3666643352077764069,
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
		currency : 'OjlL94RGt3hPnHsX',
		prices : array(
			$client->labeledPrice(
				label : 'dgTm2VWM48YrFl5y',
				amount : 7420764727621989681,
			),
		),
		max_tip_amount : -3967165949133348108,
		suggested_tip_amounts : array(-7483021901212131430),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 75,
	),
);
```