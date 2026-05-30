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
	version : 72,
	start_date : 55,
	end_date : 26,
	min_bid_amount : 4619261575269784767,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 45,
			amount : 5349391481862329505,
			date : 26,
		),
	),
	top_bidders : array(6375786413021237668),
	next_round_at : 87,
	last_gift_num : 65,
	gifts_left : 76,
	current_round : 26,
	total_rounds : 45,
	rounds : array(
		$client->starGiftAuctionRound(
			num : 97,
			duration : 59,
		),
		$client->starGiftAuctionRoundExtendable(
			num : 96,
			duration : 17,
			extend_top : 85,
			extend_window : 24,
		),
	),
);
```