# starGiftActiveAuctionState

**Layer** : 225

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
		id : -1144202576947643689,
		sticker : $client->documentEmpty(
			id : 4977556542916974412,
		),
		stars : -2112598245593292659,
		availability_remains : 1,
		availability_total : 44,
		availability_resale : 6153023330382134602,
		convert_stars : -8072334174261247675,
		first_sale_date : 61,
		last_sale_date : 36,
		upgrade_stars : -2199086026355000158,
		resell_min_stars : 5898894332255353837,
		title : 'NmhgKXu7bdLZH1YE',
		released_by : $client->peerUser(
			user_id : -419115834801255160,
		),
		per_user_total : 73,
		per_user_remains : 28,
		locked_until_date : 44,
		auction_slug : 'yTXUQZp2Khvb68sS',
		gifts_per_round : 45,
		auction_start_date : 26,
		upgrade_variants : 19,
		background : $client->starGiftBackground(
			center_color : 52,
			edge_color : 27,
			text_color : 30,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 940402761024202427,
		bid_date : 51,
		min_bid_amount : -6204049539900369715,
		bid_peer : $client->peerUser(
			user_id : -8345072095561381277,
		),
		acquired_count : 72,
	),
);
```