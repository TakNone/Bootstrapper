# starGiftAuctionState

**Layer** : 227

```tl
starGiftAuctionState#771a4e66 version:int start_date:int end_date:int min_bid_amount:long bid_levels:Vector<AuctionBidLevel> top_bidders:Vector<long> next_round_at:int last_gift_num:int gifts_left:int current_round:int total_rounds:int rounds:Vector<StarGiftAuctionRound> = StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>version</mark> | [`int`](type/int) | NOTHING |
| <mark>start_date</mark> | [`int`](type/int) | NOTHING |
| <mark>end_date</mark> | [`int`](type/int) | NOTHING |
| <mark>min_bid_amount</mark> | [`long`](type/long) | NOTHING |
| <mark>bid_levels</mark> | [`Vector<AuctionBidLevel>`](type/AuctionBidLevel) | NOTHING |
| <mark>top_bidders</mark> | [`Vector<long>`](type/long) | NOTHING |
| <mark>next_round_at</mark> | [`int`](type/int) | NOTHING |
| <mark>last_gift_num</mark> | [`int`](type/int) | NOTHING |
| <mark>gifts_left</mark> | [`int`](type/int) | NOTHING |
| <mark>current_round</mark> | [`int`](type/int) | NOTHING |
| <mark>total_rounds</mark> | [`int`](type/int) | NOTHING |
| <mark>rounds</mark> | [`Vector<StarGiftAuctionRound>`](type/StarGiftAuctionRound) | NOTHING |

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionState(
	version : 94,
	start_date : 58,
	end_date : 3,
	min_bid_amount : -4596466650062508420,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 4,
			amount : 2586243466607034526,
			date : 15,
		),
	),
	top_bidders : array(-5539603872579231241),
	next_round_at : 51,
	last_gift_num : 35,
	gifts_left : 83,
	current_round : 83,
	total_rounds : 62,
	rounds : array(
		$client->starGiftAuctionRound(
			num : 100,
			duration : 68,
		),
		$client->starGiftAuctionRoundExtendable(
			num : 80,
			duration : 14,
			extend_top : 87,
			extend_window : 42,
		),
	),
);
```