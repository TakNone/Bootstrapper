# uniqueStarGiftValueInfo

**Layer** : 214

```tl
uniqueStarGiftValueInfo#512fe446 flags:# last_sale_on_fragment:flags.1?true value_is_average:flags.6?true currency:string value:long initial_sale_date:int initial_sale_stars:long initial_sale_price:long last_sale_date:flags.0?int last_sale_price:flags.0?long floor_price:flags.2?long average_price:flags.3?long listed_count:flags.4?int fragment_listed_count:flags.5?int fragment_listed_url:flags.5?string = UniqueStarGiftValueInfo;
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

[UniqueStarGiftValueInfo](type/UniqueStarGiftValueInfo)

---

## Example

```php
$uniqueStarGiftValueInfo = $client->uniqueStarGiftValueInfo(
	last_sale_on_fragment : true,
	value_is_average : true,
	currency : 'TPFMNrnyCJhl4Hw6',
	value : 6408946872129206387,
	initial_sale_date : 42,
	initial_sale_stars : -3603746655291229522,
	initial_sale_price : -2185273729659303097,
	last_sale_date : 100,
	last_sale_price : 6315600318935866202,
	floor_price : 2378968123368796318,
	average_price : -1362494550216501917,
	listed_count : 0,
	fragment_listed_count : 20,
	fragment_listed_url : 'https://docs.liveproto.dev',
);
```