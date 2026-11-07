# messageActionGiftTon

**Description** : *You were gifted some Grams*

**Layer** : 233

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
| <mark>crypto_amount</mark> | [`long`](type/long) | Amount in the smallest unit of the cryptocurrency (for TONs, one billionth of a ton, AKA a nanogram) |
| **transaction_id** | [`flags.0?string`](type/string) | Transaction ID |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftTon(
	currency : 'SX5wc8Vhq3fobvkW',
	amount : -5364881519539080474,
	crypto_currency : 'LKsnyS9O7Xvz1iTV',
	crypto_amount : 8071572219800738191,
	transaction_id : 'V1UzOPBeSYyEqIHr',
);
```