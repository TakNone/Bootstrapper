# auctionBidLevel

**Layer** : 222

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
	pos : 80,
	amount : -2077204573310237679,
	date : 38,
);
```