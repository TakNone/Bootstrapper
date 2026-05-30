# starGiftActiveAuctionState

**Layer** : 222

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
		id : -8686786589346782496,
		sticker : $client->documentEmpty(
			id : -5362161316856555366,
		),
		stars : 1541632325805944575,
		availability_remains : 17,
		availability_total : 88,
		availability_resale : -2150535403537705681,
		convert_stars : -2718143999972520498,
		first_sale_date : 4,
		last_sale_date : 15,
		upgrade_stars : 261872094594406082,
		resell_min_stars : 1116227793544689653,
		title : 'BkSP2vlmQAWbEqLt',
		released_by : $client->peerUser(
			user_id : 1465602684329000941,
		),
		per_user_total : 56,
		per_user_remains : 28,
		locked_until_date : 70,
		auction_slug : 'sWXvP54hr3diSp8H',
		gifts_per_round : 79,
		auction_start_date : 17,
		upgrade_variants : 50,
		background : $client->starGiftBackground(
			center_color : 89,
			edge_color : 34,
			text_color : 3,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -3127962173502032506,
		bid_date : 3,
		min_bid_amount : -3185268909450497329,
		bid_peer : $client->peerUser(
			user_id : 485623752938147840,
		),
		acquired_count : 88,
	),
);
```