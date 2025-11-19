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
	gift_id : 7960882622842467818,
	state : $client->starGiftAuctionState(
		version : 82,
		start_date : 10,
		end_date : 0,
		min_bid_amount : -966530733499416467,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 64,
				amount : -356506865964484970,
				date : 2,
			),
		),
		top_bidders : array(5060076418317437496),
		next_round_at : 10,
		gifts_left : 93,
		current_round : 88,
		total_rounds : 10,
	),
);
```