# fragment.collectibleInfo

**Description** : *Info about a fragment collectible*

**Layer** : 211

```tl
fragment.collectibleInfo#6ebdff91 purchase_date:int currency:string amount:long crypto_currency:string crypto_amount:long url:string = fragment.CollectibleInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purchase_date</mark> | [`int`](type/int) | Purchase date (unixtime) |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code for amount |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>crypto_currency</mark> | [`string`](type/string) | Cryptocurrency name |
| <mark>crypto_amount</mark> | [`long`](type/long) | Price, in the smallest units of the cryptocurrency |
| <mark>url</mark> | [`string`](type/string) | Fragment URL with more info about the collectible |

---

## Type

[fragment.CollectibleInfo](type/fragment.CollectibleInfo)

---

## Example

```php
$fragmentCollectibleInfo = $client->fragment->collectibleInfo(
	purchase_date : 59,
	currency : 'F2rtg978j45yeTYD',
	amount : -2221789360307585625,
	crypto_currency : 'c54l0fzLVTiRpuMX',
	crypto_amount : -1129199338545317958,
	url : 'https://docs.liveproto.dev',
);
```