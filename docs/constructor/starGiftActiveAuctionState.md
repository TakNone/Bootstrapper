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
		id : 7119373648959807075,
		sticker : $client->documentEmpty(
			id : 8290333103807669708,
		),
		stars : 4246715817744883135,
		availability_remains : 15,
		availability_total : 93,
		availability_resale : -2133290275284906663,
		convert_stars : 6321076053350465022,
		first_sale_date : 15,
		last_sale_date : 70,
		upgrade_stars : -7223285744901705004,
		resell_min_stars : 1595183786140946824,
		title : 'YFkjDQZeXa3N9Vwz',
		released_by : $client->peerUser(
			user_id : -1840584864747989519,
		),
		per_user_total : 4,
		per_user_remains : 41,
		locked_until_date : 97,
		auction_slug : 'oHZ4nWbijSKk2QJx',
		gifts_per_round : 56,
	),
	state : $client->starGiftAuctionState(
		version : 80,
		start_date : 67,
		end_date : 78,
		min_bid_amount : 1364152837529256104,
		bid_levels : array(
			$client->auctionBidLevel(
				pos : 82,
				amount : 4729522053206473426,
				date : 79,
			),
		),
		top_bidders : array(5404079426141487583),
		next_round_at : 77,
		gifts_left : 71,
		current_round : 42,
		total_rounds : 12,
	),
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 6577215506762846246,
		bid_date : 66,
		min_bid_amount : -6592758787075278376,
		peer : $client->peerUser(
			user_id : -1813957500944223391,
		),
		acquired_count : 54,
	),
);
```