# payments.uniqueStarGiftValueInfo

**Description** : *Information about the value of a collectible gift &raquo;*

**Layer** : 216

```tl
payments.uniqueStarGiftValueInfo#512fe446 flags:# last_sale_on_fragment:flags.1?true value_is_average:flags.6?true currency:string value:long initial_sale_date:int initial_sale_stars:long initial_sale_price:long last_sale_date:flags.0?int last_sale_price:flags.0?long floor_price:flags.2?long average_price:flags.3?long listed_count:flags.4?int fragment_listed_count:flags.5?int fragment_listed_url:flags.5?string = payments.UniqueStarGiftValueInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **last_sale_on_fragment** | [`flags.1?true`](type/true) | If set, the last sale was completed on Fragment |
| **value_is_average** | [`flags.6?true`](type/true) | If set, the value is calculated from the average value of sold gifts of the same type. Otherwise, it is based on the sale price of the gift |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code (a localized fiat currency used to represent prices and price estimations in this constructor) |
| <mark>value</mark> | [`long`](type/long) | Estimated value of the gift, in the smallest unit of the currency specified in currency |
| <mark>initial_sale_date</mark> | [`int`](type/int) | Initial purchase date of the gift |
| <mark>initial_sale_stars</mark> | [`long`](type/long) | Initial purchase price in Stars |
| <mark>initial_sale_price</mark> | [`long`](type/long) | Initial purchase price in the smallest unit of the currency specified in currency (automatically converted from initial_sale_stars) |
| **last_sale_date** | [`flags.0?int`](type/int) | Last resale date of the gift |
| **last_sale_price** | [`flags.0?long`](type/long) | Last resale price, in the smallest unit of the currency specified in currency |
| **floor_price** | [`flags.2?long`](type/long) | The current minimum price of collectible gifts of the same type, in the smallest unit of the currency specified in currency |
| **average_price** | [`flags.3?long`](type/long) | The current average sale price of collectible gifts of the same type, in the smallest unit of the currency specified in currency |
| **listed_count** | [`flags.4?int`](type/int) | Number of gifts of the same type currently being resold on Telegram |
| **fragment_listed_count** | [`flags.5?int`](type/int) | Number of gifts of the same type currently being resold on fragment |
| **fragment_listed_url** | [`flags.5?string`](type/string) | Fragment link to the listing of gifts of the same type currently being resold on fragment |

---

## Type

[payments.UniqueStarGiftValueInfo](type/payments.UniqueStarGiftValueInfo)

---

## Example

```php
$paymentsUniqueStarGiftValueInfo = $client->payments->uniqueStarGiftValueInfo(
	last_sale_on_fragment : true,
	value_is_average : true,
	currency : 'N5AhGxwt2lvJ8OBH',
	value : 6154974924271254991,
	initial_sale_date : 39,
	initial_sale_stars : 5908309064937333458,
	initial_sale_price : 5443581237826100982,
	last_sale_date : 67,
	last_sale_price : 4422096524074837788,
	floor_price : 858184582950754512,
	average_price : -7288870973473118117,
	listed_count : 54,
	fragment_listed_count : 25,
	fragment_listed_url : 'https://docs.liveproto.dev',
);
```