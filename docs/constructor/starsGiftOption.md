# starsGiftOption

**Description** : *Telegram Stars gift option*

**Layer** : 218

```tl
starsGiftOption#5e0589f1 flags:# extended:flags.1?true stars:long store_product:flags.0?string currency:string amount:long = StarsGiftOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **extended** | [`flags.1?true`](type/true) | If set, the option must only be shown in the full list of topup options |
| <mark>stars</mark> | [`long`](type/long) | Amount of Telegram stars |
| **store_product** | [`flags.0?string`](type/string) | Identifier of the store product associated with the option, official apps only |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[StarsGiftOption](type/StarsGiftOption)

---

## Example

```php
$starsGiftOption = $client->starsGiftOption(
	extended : true,
	stars : -6065375910365683324,
	store_product : '5dYsatKuAqEeRMSP',
	currency : 'pIx9BP6g20WwlyMD',
	amount : 3983533420865401351,
);
```