# inputStorePaymentStarsTopup

**Description** : *Used to top up the Telegram Stars balance of the current account*

**Layer** : 214

```tl
inputStorePaymentStarsTopup#f9a2a6cb stars:long currency:string amount:long flags:# spend_purpose_peer:flags.0?InputPeer = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stars</mark> | [`long`](type/long) | Amount of stars to topup |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **spend_purpose_peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentStarsTopup(
	stars : -8716194806279692714,
	currency : 'BVEFe84cvQStxAH1',
	amount : -4792607418756143712,
	spend_purpose_peer : $client->inputPeerEmpty(),
);
```