# updateStarGiftAuctionState

**Layer** : 218

```tl
updateStarGiftAuctionState#48e246c2 gift_id:long state:StarGiftAuctionState = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| <mark>state</mark> | [`StarGiftAuctionState`](type/StarGiftAuctionState) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarGiftAuctionState(
	gift_id : -5595925023709014983,
	state : $client->starGiftAuctionState(
		version : 21,
		start_date : 58,
		end_date : 58,
		min_bid_amount : -273105968999198972,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 90,
				amount : -3328985678981745017,
				date : 16,
			),
		),
		top_bidders : array(-7554920763656834843),
		next_round_at : 47,
		gifts_left : 0,
		current_round : 93,
		total_rounds : 13,
	),
);
```