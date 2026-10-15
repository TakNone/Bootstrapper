# auctionBidLevel

**Description** : *Describes a bid in an auction*

**Layer** : 229

```tl
auctionBidLevel#310240cc pos:int amount:long date:int = AuctionBidLevel;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pos</mark> | [`int`](type/int) | Position of the bid |
| <mark>amount</mark> | [`long`](type/long) | Amount of the bid in Telegram Stars |
| <mark>date</mark> | [`int`](type/int) | Date when the bid was placed |

---

## Type

[AuctionBidLevel](type/AuctionBidLevel)

---

## Example

```php
$auctionBidLevel = $client->auctionBidLevel(
	pos : 39,
	amount : -3216522888929683998,
	date : 6,
);
```