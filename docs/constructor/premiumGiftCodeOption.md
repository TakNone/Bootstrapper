# premiumGiftCodeOption

**Description** : *Contains info about a giveaway/gift option*

**Layer** : 218

```tl
premiumGiftCodeOption#257e962b flags:# users:int months:int store_product:flags.0?string store_quantity:flags.1?int currency:string amount:long = PremiumGiftCodeOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>users</mark> | [`int`](type/int) | Number of users which will be able to activate the gift codes |
| <mark>months</mark> | [`int`](type/int) | Duration in months of each gifted Telegram Premium subscription |
| **store_product** | [`flags.0?string`](type/string) | Identifier of the store product associated with the option, official apps only |
| **store_quantity** | [`flags.1?int`](type/int) | Number of times the store product must be paid |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[PremiumGiftCodeOption](type/PremiumGiftCodeOption)

---

## Example

```php
$premiumGiftCodeOption = $client->premiumGiftCodeOption(
	users : 51,
	months : 23,
	store_product : 'Rjc5HLUgW4ATwrfp',
	store_quantity : 81,
	currency : 'C9vYTnP02mbMNR1a',
	amount : -3249516437685247447,
);
```