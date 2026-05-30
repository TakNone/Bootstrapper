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
		id : 2081036428433352016,
		sticker : $client->documentEmpty(
			id : 6985017680523740052,
		),
		stars : -6410277038286386165,
		availability_remains : 9,
		availability_total : 97,
		availability_resale : 2808463040574027220,
		convert_stars : -8710817963108179716,
		first_sale_date : 96,
		last_sale_date : 76,
		upgrade_stars : -7468409979350138312,
		resell_min_stars : 6685051237972218963,
		title : 'ER84btzLm1ylBMxK',
		released_by : $client->peerUser(
			user_id : 7633575831493883831,
		),
		per_user_total : 25,
		per_user_remains : 16,
		locked_until_date : 12,
		auction_slug : 'LvIDWmlJQshKcVFO',
		gifts_per_round : 16,
		auction_start_date : 6,
		upgrade_variants : 1,
		background : $client->starGiftBackground(
			center_color : 8,
			edge_color : 12,
			text_color : 31,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 5661879493542170948,
		bid_date : 40,
		min_bid_amount : 945607531999437841,
		bid_peer : $client->peerUser(
			user_id : 4951505309942698232,
		),
		acquired_count : 12,
	),
);
```