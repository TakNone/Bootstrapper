# onrampQuote

**Layer** : 233

```tl
onrampQuote#7a8011e9 base_currency:string base_amount:string crypto_currency:string crypto_amount:string crypto_price:string fee_amount:string extra_fee_amount:string network_fee_amount:string total_amount:string payment_method:string expires_date:int = OnrampQuote;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>base_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>base_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_price</mark> | [`string`](type/string) | NOTHING |
| <mark>fee_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>extra_fee_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>network_fee_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>total_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>payment_method</mark> | [`string`](type/string) | NOTHING |
| <mark>expires_date</mark> | [`int`](type/int) | NOTHING |

---

## Type

[OnrampQuote](type/OnrampQuote)

---

## Example

```php
$onrampQuote = $client->onrampQuote(
	base_currency : '1OuVATmFyrh4UCd6',
	base_amount : 'KtX0OhgVQR71LwS6',
	crypto_currency : 'HGVO8ndYPfyQLxc5',
	crypto_amount : 'W3b96QqDnr72kvEw',
	crypto_price : 'ztNpjRVo8bhy7DCg',
	fee_amount : 'CocV4JfOeM3TLZb6',
	extra_fee_amount : 'oBcg1e8KDJsbhi6I',
	network_fee_amount : 'qRYy9vVFrNnd152x',
	total_amount : 'kE1CPqvWFbeZtlSf',
	payment_method : 'CzwxENhDaIs9qvc7',
	expires_date : 33,
);
```