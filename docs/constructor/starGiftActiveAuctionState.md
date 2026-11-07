# starGiftActiveAuctionState

**Description** : *Contains info about an auction where the user has placed a bid &raquo;*

**Layer** : 233

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
		id : 824943583282698285,
		sticker : $client->documentEmpty(
			id : -2083313728501701666,
		),
		stars : -2073333926895717352,
		availability_remains : 16,
		availability_total : 56,
		availability_resale : 8440586902149612541,
		convert_stars : 9123882097193863862,
		first_sale_date : 35,
		last_sale_date : 76,
		upgrade_stars : 8968086414434516811,
		resell_min_stars : -7144579563322705331,
		title : 'aHW1vPFkRTKwb7dz',
		released_by : $client->peerUser(
			user_id : 5936939071473673877,
		),
		per_user_total : 90,
		per_user_remains : 63,
		locked_until_date : 61,
		auction_slug : 'pJqzScwBPRfmI5Ko',
		gifts_per_round : 47,
		auction_start_date : 98,
		upgrade_variants : 33,
		background : $client->starGiftBackground(
			center_color : 31,
			edge_color : 85,
			text_color : 90,
		),
	),
	state : $client->starGiftAuctionStateNotModified(),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -5378641225425745258,
		bid_date : 13,
		min_bid_amount : 7187858410150614999,
		bid_peer : $client->peerUser(
			user_id : -2194887289808314030,
		),
		acquired_count : 43,
	),
);
```