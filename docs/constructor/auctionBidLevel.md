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
	pos : 34,
	amount : -8971309725157607,
	date : 17,
);
```