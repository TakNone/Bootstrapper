# inputStorePaymentStarsTopup

**Description** : *Used to top up the Telegram Stars balance of the current account*

**Layer** : 216

```tl
inputStorePaymentStarsTopup#f9a2a6cb flags:# stars:long currency:string amount:long spend_purpose_peer:flags.0?InputPeer = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>stars</mark> | [`long`](type/long) | Amount of stars to topup |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **spend_purpose_peer** | [`flags.0?InputPeer`](type/InputPeer) | Should be populated with the peer where the topup process was initiated due to low funds (i.e. a bot for bot payments, a channel for paid media/reactions, etc); leave this flag unpopulated if the topup flow was not initated when attempting to spend more Stars than currently available on the account's balance |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentStarsTopup(
	stars : -9117177251036981165,
	currency : 'cRU7XDZz4OtNsneV',
	amount : -8219215364657354375,
	spend_purpose_peer : $client->inputPeerEmpty(),
);
```