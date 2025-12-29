# starGiftActiveAuctionState

**Layer** : 218

```tl
starGiftActiveAuctionState#d31bc45d gift:StarGift state:StarGiftAuctionState user_state:StarGiftAuctionUserState = StarGiftActiveAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>state</mark> | [`StarGiftAuctionState`](type/StarGiftAuctionState) | NOTHING |
| <mark>user_state</mark> | [`StarGiftAuctionUserState`](type/StarGiftAuctionUserState) | NOTHING |

---

## Type

[StarGiftActiveAuctionState](type/StarGiftActiveAuctionState)

---

## Example

```php
$starGiftActiveAuctionState = $client->starGiftActiveAuctionState(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 4417626589752089066,
		sticker : $client->documentEmpty(
			id : 7401789681314750875,
		),
		stars : 5997682087322300200,
		availability_remains : 78,
		availability_total : 36,
		availability_resale : -8535684424793351959,
		convert_stars : 7324384996683355538,
		first_sale_date : 53,
		last_sale_date : 0,
		upgrade_stars : -7343067395767549326,
		resell_min_stars : 970687999389192350,
		title : 'E74nOq5VmhuZKDQW',
		released_by : $client->peerUser(
			user_id : 7185454243092270415,
		),
		per_user_total : 86,
		per_user_remains : 12,
		locked_until_date : 66,
		auction_slug : 'NUMtD0qJO7WcX3Ta',
		gifts_per_round : 68,
	),
	state : $client->starGiftAuctionState(
		version : 21,
		start_date : 70,
		end_date : 85,
		min_bid_amount : 2005314865420047092,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 11,
				amount : 1073564314003170911,
				date : 91,
			),
		),
		top_bidders : array(-1552728809199881225),
		next_round_at : 3,
		gifts_left : 71,
		current_round : 64,
		total_rounds : 32,
	),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 6220078040385643554,
		bid_date : 70,
		min_bid_amount : 4504629254664545656,
		peer : $client->peerUser(
			user_id : -8760395968892765602,
		),
		acquired_count : 13,
	),
);
```