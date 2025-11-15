# messageActionGiftTon

**Description** : *You were gifted some toncoins*

**Layer** : 218

```tl
messageActionGiftTon#a8a3c699 flags:# currency:string amount:long crypto_currency:string crypto_amount:long transaction_id:flags.0?string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>currency</mark> | [`string`](type/string) | Name of a localized FIAT currency |
| <mark>amount</mark> | [`long`](type/long) | FIAT currency equivalent (in the currency specified in currency) of the amount specified in crypto_amount |
| <mark>crypto_currency</mark> | [`string`](type/string) | Name of the cryptocurrency |
| <mark>crypto_amount</mark> | [`long`](type/long) | Amount in the smallest unit of the cryptocurrency (for TONs, one billionth of a ton, AKA a nanoton) |
| **transaction_id** | [`flags.0?string`](type/string) | Transaction ID |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftTon(
	currency : 'BL1kcej6IJw4gt2b',
	amount : -4624224663028186790,
	crypto_currency : 'go54ZMJjSGYULsH7',
	crypto_amount : -6184094228342866580,
	transaction_id : 'IFi5NqTRUp6QsLbv',
);
```