# starGiftAuctionState

**Description** : *Represents an active or pending auction &raquo;*

**Layer** : 233

```tl
starGiftAuctionState#771a4e66 version:int start_date:int end_date:int min_bid_amount:long bid_levels:Vector<AuctionBidLevel> top_bidders:Vector<long> next_round_at:int last_gift_num:int gifts_left:int current_round:int total_rounds:int rounds:Vector<StarGiftAuctionRound> = StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>version</mark> | [`int`](type/int) | Only apply incoming starGiftAuctionState constructors if the received version is bigger than the locally cached version |
| <mark>start_date</mark> | [`int`](type/int) | UNIX timestamp indicating when the auction will start (or when it started, if it's in the past) |
| <mark>end_date</mark> | [`int`](type/int) | UNIX timestamp indicating when the auction will end |
| <mark>min_bid_amount</mark> | [`long`](type/long) | Minumum allowed bid amount in Telegram Stars: only applicable if the user hasn't made a bid yet, otherwise must be overridden to the value of starGiftAuctionUserState.min_bid_amount (which will be set if and only if the user already made a bid to this auction) |
| <mark>bid_levels</mark> | [`Vector<AuctionBidLevel>`](type/AuctionBidLevel) | Contains a sparse list of bids starting from the top bids, a more detailed description is available in the docs |
| <mark>top_bidders</mark> | [`Vector<long>`](type/long) | User IDs of the top 3 bidders (the user constructors will be returned as min constructors in the containing object) |
| <mark>next_round_at</mark> | [`int`](type/int) | UNIX timestamp indicating when the current auction round will end, distributing starGift.gifts_per_round gifts to the top starGift.gifts_per_round bidders |
| <mark>last_gift_num</mark> | [`int`](type/int) | The number of gifts that were distributed in the previous round (also used to compute the approximated index of the gift that the current user will receive, last_gift_num + approx_pos, see here » for more info) |
| <mark>gifts_left</mark> | [`int`](type/int) | The remaining number of gifts that are yet to be distributed |
| <mark>current_round</mark> | [`int`](type/int) | The current round number (starting from 1) |
| <mark>total_rounds</mark> | [`int`](type/int) | The total number of rounds in this auction |
| <mark>rounds</mark> | [`Vector<StarGiftAuctionRound>`](type/StarGiftAuctionRound) | Detailed round information |

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionState(
	version : 56,
	start_date : 75,
	end_date : 3,
	min_bid_amount : 2507426556135760420,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 37,
			amount : 319984940889239306,
			date : 74,
		),
	),
	top_bidders : array(-5714617228461526860),
	next_round_at : 10,
	last_gift_num : 44,
	gifts_left : 44,
	current_round : 79,
	total_rounds : 6,
	rounds : array(
		$client->starGiftAuctionRound(
			num : 66,
			duration : 38,
		),
		$client->starGiftAuctionRoundExtendable(
			num : 80,
			duration : 37,
			extend_top : 85,
			extend_window : 86,
		),
	),
);
```