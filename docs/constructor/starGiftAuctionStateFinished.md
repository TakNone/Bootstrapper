# starGiftAuctionStateFinished

**Layer** : 222

```tl
starGiftAuctionStateFinished#972dabbf flags:# start_date:int end_date:int average_price:long listed_count:flags.0?int fragment_listed_count:flags.1?int fragment_listed_url:flags.1?string = StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>start_date</mark> | [`int`](type/int) | NOTHING |
| <mark>end_date</mark> | [`int`](type/int) | NOTHING |
| <mark>average_price</mark> | [`long`](type/long) | NOTHING |
| **listed_count** | [`flags.0?int`](type/int) | NOTHING |
| **fragment_listed_count** | [`flags.1?int`](type/int) | NOTHING |
| **fragment_listed_url** | [`flags.1?string`](type/string) | NOTHING |

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionStateFinished(
	start_date : 41,
	end_date : 64,
	average_price : -6930134187649335077,
	listed_count : 50,
	fragment_listed_count : 62,
	fragment_listed_url : 'https://docs.liveproto.dev',
);
```