# payments.uniqueStarGiftValueInfo

**Description** : *Information about the value of a collectible gift &raquo;*

**Layer** : 222

```tl
payments.uniqueStarGiftValueInfo#512fe446 flags:# last_sale_on_fragment:flags.1?true value_is_average:flags.6?true currency:string value:long initial_sale_date:int initial_sale_stars:long initial_sale_price:long last_sale_date:flags.0?int last_sale_price:flags.0?long floor_price:flags.2?long average_price:flags.3?long listed_count:flags.4?int fragment_listed_count:flags.5?int fragment_listed_url:flags.5?string = payments.UniqueStarGiftValueInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	currency : 'kdIXUhwTC3LzeYbK',
	value : 5141576493815544592,
	initial_sale_date : 3,
	initial_sale_stars : 6122999251444436646,
	initial_sale_price : -5843447171567499499,
	last_sale_date : 97,
	last_sale_price : 1920105967097833549,
	floor_price : 4677518603477864390,
	average_price : -7665208301714266290,
	listed_count : 62,
	fragment_listed_count : 58,
	fragment_listed_url : 'https://docs.liveproto.dev',
);
```