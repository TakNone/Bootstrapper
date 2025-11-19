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
		id : -1196122082582636392,
		sticker : $client->documentEmpty(
			id : 8009544516410455116,
		),
		stars : 7483279674481465135,
		availability_remains : 32,
		availability_total : 82,
		availability_resale : -8233034609233701875,
		convert_stars : 4615496024588151233,
		first_sale_date : 35,
		last_sale_date : 23,
		upgrade_stars : -8544866617244045009,
		resell_min_stars : -7657035598100241489,
		title : 'l4dkohawUjIs6L0O',
		released_by : $client->peerUser(
			user_id : -7039726262867559810,
		),
		per_user_total : 90,
		per_user_remains : 55,
		locked_until_date : 52,
		auction_slug : 'Lc7wRJ4ftEmeKB15',
		gifts_per_round : 51,
	),
	state : $client->starGiftAuctionState(
		version : 42,
		start_date : 10,
		end_date : 32,
		min_bid_amount : 5416396629013313976,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 45,
				amount : -7723395568104729915,
				date : 45,
			),
		),
		top_bidders : array(-4685799028728139200),
		next_round_at : 97,
		gifts_left : 76,
		current_round : 8,
		total_rounds : 84,
	),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 1673087879618048933,
		bid_date : 7,
		min_bid_amount : -1852677968556506993,
		peer : $client->peerUser(
			user_id : 3872049633666794520,
		),
		acquired_count : 89,
	),
);
```