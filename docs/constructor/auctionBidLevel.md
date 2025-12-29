# auctionBidLevel

**Layer** : 218

```tl
auctionBidLevel#310240cc pos:int amount:long date:int = AuctionBidLevel;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pos</mark> | [`int`](type/int) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |

---

## Type

[AuctionBidLevel](type/AuctionBidLevel)

---

## Example

```php
$auctionBidLevel = $client->auctionBidLevel(
	pos : 64,
	amount : 6328819917915225770,
	date : 35,
);
```