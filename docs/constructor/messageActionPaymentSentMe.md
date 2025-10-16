# messageActionPaymentSentMe

**Description** : *A user just sent a payment to me \(a bot\)*

**Layer** : 216

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
	currency : 'PMXnxDka2CLHKQqb',
	total_amount : 7062236272600401032,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'UWuHOVoSyLKg7xwh',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'XNR1T2S6G908bjMU',
			street_line2 : '4L5FphQqBKy3l16V',
			city : 'vabpjhtIendTH19Z',
			state : '5gXvOhAk7eSaxM3V',
			country_iso2 : '2yXvmsz7W8Qa5rBC',
			post_code : 'VUPXk6BDxyWRIK9G',
		),
	),
	shipping_option_id : 'VJL4sIw9P8TAUmE7',
	charge : $client->paymentCharge(
		id : 'Odg34CeiMEDm7SZP',
		provider_charge_id : 'SEqrtb3vaDk7c6ZM',
	),
	subscription_until_date : 19,
);
```