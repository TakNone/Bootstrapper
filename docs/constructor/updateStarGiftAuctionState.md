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
	gift_id : -6442510181279582422,
	state : $client->starGiftAuctionState(
		version : 47,
		start_date : 46,
		end_date : 5,
		min_bid_amount : 749211238247952042,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 9,
				amount : -1883651747819118401,
				date : 7,
			),
		),
		top_bidders : array(8778031465043156223),
		next_round_at : 68,
		gifts_left : 44,
		current_round : 66,
		total_rounds : 87,
	),
);
```