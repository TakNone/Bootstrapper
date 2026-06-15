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
		id : -2568971462832669163,
		sticker : $client->documentEmpty(
			id : 7820925408396856224,
		),
		stars : 1179114327600940440,
		availability_remains : 33,
		availability_total : 77,
		availability_resale : -7868592574427382099,
		convert_stars : 3069381737196850625,
		first_sale_date : 59,
		last_sale_date : 55,
		upgrade_stars : 542653639825729559,
		resell_min_stars : 4975946037665960067,
		title : 'rRb7qSLyBiPEJMgd',
		released_by : $client->peerUser(
			user_id : -8265993678734933392,
		),
		per_user_total : 60,
		per_user_remains : 16,
		locked_until_date : 44,
		auction_slug : 'F2npN3Qxaczbw0CS',
		gifts_per_round : 31,
		auction_start_date : 68,
		upgrade_variants : 66,
		background : $client->starGiftBackground(
			center_color : 14,
			edge_color : 56,
			text_color : 49,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -6380037749202919880,
		bid_date : 87,
		min_bid_amount : -2214354473681223975,
		bid_peer : $client->peerUser(
			user_id : 8828763400929070703,
		),
		acquired_count : 94,
	),
);
```