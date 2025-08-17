# messageActionPaymentSentMe

**Description** : *A user just sent a payment to me (a bot)*

**Layer** : 211

```tl
messageActionPaymentSentMe#ffa00ccc flags:# recurring_init:flags.2?true recurring_used:flags.3?true currency:string total_amount:long payload:bytes info:flags.0?PaymentRequestedInfo shipping_option_id:flags.1?string charge:PaymentCharge subscription_until_date:flags.4?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **recurring_init** | [`flags.2?true`](type/true) | Whether this is the first payment of a recurring payment we just subscribed to |
| **recurring_used** | [`flags.3?true`](type/true) | Whether this payment is part of a recurring payment |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code, or XTR for Telegram Stars |
| <mark>total_amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot specified invoice payload |
| **info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Order info provided by the user |
| **shipping_option_id** | [`flags.1?string`](type/string) | Identifier of the shipping option chosen by the user |
| <mark>charge</mark> | [`PaymentCharge`](type/PaymentCharge) | Provider payment identifier |
| **subscription_until_date** | [`flags.4?int`](type/int) | Expiration date of the Telegram Star subscription » |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaymentSentMe(
	recurring_init : true,
	recurring_used : true,
	currency : 'TVkw2lNfnGh4E9mo',
	total_amount : -2645234465417861432,
	payload : '?ffcLiveProto???',
	info : $client->paymentRequestedInfo(
		name : 'Uw7uTsPYQfKVOt8n',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'YwbsL9kcRpJMzUNA',
			street_line2 : 'eVJ8vKmS6jFRItUz',
			city : 'i25qVsFNzeEYtQoT',
			state : '93zWG2jB0dpRcCQL',
			country_iso2 : 'ZsIpJmrKOvYzMauF',
			post_code : 'aOUN7SfHKq6AIsoD',
		),
	),
	shipping_option_id : 'CYlfbaL1MTiSOB5s',
	charge : $client->paymentCharge(
		id : 'S1OjBIgWr3Clt50P',
		provider_charge_id : 'PeYh7jEfK4NHqnIM',
	),
	subscription_until_date : 82,
);
```