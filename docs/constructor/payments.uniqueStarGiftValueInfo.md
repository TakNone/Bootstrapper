# payments.uniqueStarGiftValueInfo

**Layer** : 216

```tl
payments.uniqueStarGiftValueInfo#512fe446 flags:# last_sale_on_fragment:flags.1?true value_is_average:flags.6?true currency:string value:long initial_sale_date:int initial_sale_stars:long initial_sale_price:long last_sale_date:flags.0?int last_sale_price:flags.0?long floor_price:flags.2?long average_price:flags.3?long listed_count:flags.4?int fragment_listed_count:flags.5?int fragment_listed_url:flags.5?string = payments.UniqueStarGiftValueInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **last_sale_on_fragment** | [`flags.1?true`](type/true) | NOTHING |
| **value_is_average** | [`flags.6?true`](type/true) | NOTHING |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>value</mark> | [`long`](type/long) | NOTHING |
| <mark>initial_sale_date</mark> | [`int`](type/int) | NOTHING |
| <mark>initial_sale_stars</mark> | [`long`](type/long) | NOTHING |
| <mark>initial_sale_price</mark> | [`long`](type/long) | NOTHING |
| **last_sale_date** | [`flags.0?int`](type/int) | NOTHING |
| **last_sale_price** | [`flags.0?long`](type/long) | NOTHING |
| **floor_price** | [`flags.2?long`](type/long) | NOTHING |
| **average_price** | [`flags.3?long`](type/long) | NOTHING |
| **listed_count** | [`flags.4?int`](type/int) | NOTHING |
| **fragment_listed_count** | [`flags.5?int`](type/int) | NOTHING |
| **fragment_listed_url** | [`flags.5?string`](type/string) | NOTHING |

---

## Type

[payments.UniqueStarGiftValueInfo](type/payments.UniqueStarGiftValueInfo)

---

## Example

```php
$paymentsUniqueStarGiftValueInfo = $client->payments->uniqueStarGiftValueInfo(
	last_sale_on_fragment : true,
	value_is_average : true,
	currency : 'PEh1ebsxiNTjOyHr',
	value : 56838276864241165,
	initial_sale_date : 34,
	initial_sale_stars : -7175482880299044127,
	initial_sale_price : -2692007395686059541,
	last_sale_date : 33,
	last_sale_price : -3837254038575092882,
	floor_price : 3843013652323066147,
	average_price : 2283194201441353561,
	listed_count : 86,
	fragment_listed_count : 0,
	fragment_listed_url : 'https://docs.liveproto.dev',
);
```