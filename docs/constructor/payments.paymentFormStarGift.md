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
	form_id : -8359583952801211493,
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
		currency : 'sc1UJvAp5qRCyFT7',
		prices : array(
			$client->labeledPrice(
				label : 'rKfN5Cnmj0XSvo6V',
				amount : -4018017289005592486,
			),
		),
		max_tip_amount : -1500851727278791573,
		suggested_tip_amounts : array(-1123489551738033501),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 14,
	),
);
```