# starGiftAuctionState

**Layer** : 222

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
	version : 99,
	start_date : 92,
	end_date : 24,
	min_bid_amount : 5923073985520137242,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 89,
			amount : -630077716321271619,
			date : 60,
		),
	),
	top_bidders : array(-2660653791737069294),
	next_round_at : 88,
	last_gift_num : 79,
	gifts_left : 74,
	current_round : 13,
	total_rounds : 83,
	rounds : array(
		$client->starGiftAuctionRound(
			num : 29,
			duration : 37,
		),
		$client->starGiftAuctionRoundExtendable(
			num : 91,
			duration : 87,
			extend_top : 65,
			extend_window : 26,
		),
	),
);
```