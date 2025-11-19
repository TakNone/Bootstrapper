# messageActionPaymentSentMe

**Description** : *A user just sent a payment to me \(a bot\)*

**Layer** : 218

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
	currency : 'S8sgbQPzd0oAKM6m',
	total_amount : 8092745769179274822,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'CFNZkReLl5nfYmdy',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'tN27bKQ8SUEdGfIZ',
			street_line2 : 'QBPbaDyZR8cxNL3g',
			city : 'rQeuFA09sDRtTJjw',
			state : 'cWLoAVj83hgq29GY',
			country_iso2 : '7wBqlovNUbOVYXaT',
			post_code : 'LR4CidU9gyvNAreP',
		),
	),
	shipping_option_id : 'ZbctmfJulMVUvQ9p',
	charge : $client->paymentCharge(
		id : 'uEXmD1pQOvyG2Ak5',
		provider_charge_id : 'gF9zvGmHnBwpJNKt',
	),
	subscription_until_date : 96,
);
```