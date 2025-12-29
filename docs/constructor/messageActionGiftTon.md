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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	currency : 'kRwb0T4rynPD6oGM',
	amount : 6949212363304619800,
	crypto_currency : 'hOFbZulP6xedpMjr',
	crypto_amount : 7837028021141173382,
	transaction_id : 'ISZFbyJ8q1Viw2Qo',
);
```