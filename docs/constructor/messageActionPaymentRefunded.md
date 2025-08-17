# messageActionPaymentRefunded

**Description** : *Describes a payment refund (service message received by both users and bots)*

**Layer** : 211

```tl
messageActionPaymentRefunded#41b3e202 flags:# peer:Peer currency:string total_amount:long payload:flags.0?bytes charge:PaymentCharge = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Identifier of the peer that returned the funds |
| <mark>currency</mark> | [`string`](type/string) | Currency, XTR for Telegram Stars |
| <mark>total_amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **payload** | [`flags.0?bytes`](type/bytes) | Bot specified invoice payload (only received by bots) |
| <mark>charge</mark> | [`PaymentCharge`](type/PaymentCharge) | Provider payment identifier |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaymentRefunded(
	peer : $client->peerUser(
		user_id : -5486200477282299155,
	),
	currency : 'ERT01PHBrMbQyvui',
	total_amount : 4164790620543496209,
	payload : '???rLiveProtoD???',
	charge : $client->paymentCharge(
		id : 'GSgch8NXkVF5tol3',
		provider_charge_id : 'MgV73xDtA54JeL0p',
	),
);
```