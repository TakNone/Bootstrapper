# starsTopupOption

**Description** : *Telegram Stars topup option*

**Layer** : 216

```tl
starsTopupOption#bd915c0 flags:# extended:flags.1?true stars:long store_product:flags.0?string currency:string amount:long = StarsTopupOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **extended** | [`flags.1?true`](type/true) | If set, the option must only be shown in the full list of topup options |
| <mark>stars</mark> | [`long`](type/long) | Amount of Telegram stars |
| **store_product** | [`flags.0?string`](type/string) | Identifier of the store product associated with the option, official apps only |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[StarsTopupOption](type/StarsTopupOption)

---

## Example

```php
$starsTopupOption = $client->starsTopupOption(
	extended : true,
	stars : 2390506514499614865,
	store_product : '038mZVlQLM5ADwpb',
	currency : 'eG61HicIwkjfAxXP',
	amount : 771095711781387033,
);
```