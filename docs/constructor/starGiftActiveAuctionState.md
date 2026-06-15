# starGiftActiveAuctionState

**Layer** : 227

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
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -5178891617842678375,
		sticker : $client->documentEmpty(
			id : -5001772654351474,
		),
		stars : -730961223493056223,
		availability_remains : 41,
		availability_total : 94,
		availability_resale : -4738782667667933582,
		convert_stars : 8224163929024322423,
		first_sale_date : 65,
		last_sale_date : 30,
		upgrade_stars : -4028097389886584813,
		resell_min_stars : -366703139529254822,
		title : 'sK0dkn2TM4cG5QXP',
		released_by : $client->peerUser(
			user_id : -851977659010234318,
		),
		per_user_total : 63,
		per_user_remains : 3,
		locked_until_date : 12,
		auction_slug : 'pYFrUawimyZ5lNbq',
		gifts_per_round : 0,
		auction_start_date : 28,
		upgrade_variants : 2,
		background : $client->starGiftBackground(
			center_color : 74,
			edge_color : 58,
			text_color : 67,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -4980684050966413827,
		bid_date : 13,
		min_bid_amount : 5452473981161769422,
		bid_peer : $client->peerUser(
			user_id : -4849281740917087791,
		),
		acquired_count : 46,
	),
);
```