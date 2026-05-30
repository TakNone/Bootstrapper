# starGiftAuctionState

**Layer** : 225

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
	version : 48,
	start_date : 38,
	end_date : 44,
	min_bid_amount : -8848125426709906735,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 15,
			amount : 6767517520153386330,
			date : 84,
		),
	),
	top_bidders : array(4540968682671391384),
	next_round_at : 70,
	last_gift_num : 7,
	gifts_left : 64,
	current_round : 27,
	total_rounds : 95,
	rounds : array(
		$client->starGiftAuctionRound(
			num : 11,
			duration : 6,
		),
		$client->starGiftAuctionRoundExtendable(
			num : 93,
			duration : 35,
			extend_top : 99,
			extend_window : 2,
		),
	),
);
```