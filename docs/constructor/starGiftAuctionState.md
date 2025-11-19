# starGiftAuctionState

**Layer** : 218

```tl
starGiftAuctionState#5db04f4b version:int start_date:int end_date:int min_bid_amount:long bid_levels:Vector<AuctionBidLevel> top_bidders:Vector<long> next_round_at:int gifts_left:int current_round:int total_rounds:int = StarGiftAuctionState;
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
| <mark>gifts_left</mark> | [`int`](type/int) | NOTHING |
| <mark>current_round</mark> | [`int`](type/int) | NOTHING |
| <mark>total_rounds</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionState(
	version : 54,
	start_date : 77,
	end_date : 54,
	min_bid_amount : 7240953632161637797,
	bid_levels : array(
		$client->auctionBidLevel(
			pos : 57,
			amount : -3939101621116036407,
			date : 23,
		),
	),
	top_bidders : array(-2306667925724511455),
	next_round_at : 60,
	gifts_left : 30,
	current_round : 90,
	total_rounds : 40,
);
```