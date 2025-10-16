# premiumGiftOption

**Description** : *Telegram Premium gift option*

**Layer** : 216

```tl
premiumGiftOption#79c059f7 flags:# months:int currency:string amount:long bot_url:flags.1?string store_product:flags.0?string = PremiumGiftOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>months</mark> | [`int`](type/int) | Duration of gifted Telegram Premium subscription |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **bot_url** | [`flags.1?string`](type/string) | An invoice deep link » to an invoice for in-app payment, using the official Premium bot; may be empty if direct payment isn't available |
| **store_product** | [`flags.0?string`](type/string) | An identifier for the App Store/Play Store product associated with the Premium gift |

---

## Type

[PremiumGiftOption](type/PremiumGiftOption)

---

## Example

```php
$premiumGiftOption = $client->premiumGiftOption(
	months : 11,
	currency : 'KMjOlpcaYixfQRTL',
	amount : 1744552483182449455,
	bot_url : 'https://docs.liveproto.dev',
	store_product : 'h4b8Nt01IUlMqKEe',
);
```