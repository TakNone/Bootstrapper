# payments.paymentFormStarGift

**Description** : *Represents a payment form for a gift, see here &raquo; for more info*

**Layer** : 227

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
	form_id : -4953994437122749022,
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
		currency : 'IP5XhWyZ0SwAYDup',
		prices : array(
			$client->labeledPrice(
				label : 'Om3rcZiV0jMk95Ah',
				amount : -8529810770151690237,
			),
		),
		max_tip_amount : 3023586459776975977,
		suggested_tip_amounts : array(3903294246711807130),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 93,
	),
);
```