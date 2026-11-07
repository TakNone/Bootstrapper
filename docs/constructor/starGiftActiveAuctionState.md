# starGiftActiveAuctionState

**Description** : *Contains info about an auction where the user has placed a bid &raquo;*

**Layer** : 229

```tl
starGiftActiveAuctionState#d31bc45d gift:StarGift state:StarGiftAuctionState user_state:StarGiftAuctionUserState = StarGiftActiveAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The collectible gift » currently being distributed in the auction |
| <mark>state</mark> | [`StarGiftAuctionState`](type/StarGiftAuctionState) | Auction state |
| <mark>user_state</mark> | [`StarGiftAuctionUserState`](type/StarGiftAuctionUserState) | Auction state related to the current user (i.e. info about placed bids, won gifts and so on) |

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
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 3005356544601233041,
		sticker : $client->documentEmpty(
			id : -6020452185189613918,
		),
		stars : 1802879905288545646,
		availability_remains : 78,
		availability_total : 29,
		availability_resale : 5089416931424052582,
		convert_stars : -4040312659791936467,
		first_sale_date : 53,
		last_sale_date : 47,
		upgrade_stars : 436007699755020486,
		resell_min_stars : -6477199113015011568,
		title : 'Oil6ckdKv5eoJaTV',
		released_by : $client->peerUser(
			user_id : 134884344479634153,
		),
		per_user_total : 63,
		per_user_remains : 54,
		locked_until_date : 32,
		auction_slug : 'pP7C20WwzuGkLoVi',
		gifts_per_round : 3,
		auction_start_date : 82,
		upgrade_variants : 59,
		background : $client->starGiftBackground(
			center_color : 21,
			edge_color : 63,
			text_color : 92,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -6771827185647658825,
		bid_date : 26,
		min_bid_amount : -5592483051727461597,
		bid_peer : $client->peerUser(
			user_id : 2360235373282487222,
		),
		acquired_count : 37,
	),
);
```