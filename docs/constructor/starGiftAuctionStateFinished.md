# starGiftAuctionStateFinished

**Layer** : 218

```tl
starGiftAuctionStateFinished#7d967c3a start_date:int end_date:int average_price:long = StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>start_date</mark> | [`int`](type/int) | NOTHING |
| <mark>end_date</mark> | [`int`](type/int) | NOTHING |
| <mark>average_price</mark> | [`long`](type/long) | NOTHING |

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionStateFinished(
	start_date : 2,
	end_date : 68,
	average_price : 3202258484176054099,
);
```