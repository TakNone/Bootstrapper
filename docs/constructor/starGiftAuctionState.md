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
	version : 12,
	start_date : 53,
	end_date : 62,
	min_bid_amount : -1596321776054728395,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 87,
			amount : 6107413748010717449,
			date : 83,
		),
	),
	top_bidders : array(-605502205506122684),
	next_round_at : 40,
	last_gift_num : 94,
	gifts_left : 57,
	current_round : 68,
	total_rounds : 88,
	rounds : array(
		$client->starGiftAuctionRound(
			num : 22,
			duration : 18,
		),
		$client->starGiftAuctionRoundExtendable(
			num : 10,
			duration : 69,
			extend_top : 43,
			extend_window : 4,
		),
	),
);
```