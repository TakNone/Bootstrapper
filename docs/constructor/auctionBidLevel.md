# auctionBidLevel

**Description** : *Describes a bid in an auction*

**Layer** : 233

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
	pos : 30,
	amount : -702355221705737372,
	date : 82,
);
```