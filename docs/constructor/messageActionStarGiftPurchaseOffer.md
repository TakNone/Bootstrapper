# messageActionStarGiftPurchaseOffer

**Layer** : 227

```tl
messageActionStarGiftPurchaseOffer#774278d4 flags:# accepted:flags.0?true declined:flags.1?true gift:StarGift price:StarsAmount expires_at:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **accepted** | [`flags.0?true`](type/true) | NOTHING |
| **declined** | [`flags.1?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |
| <mark>expires_at</mark> | [`int`](type/int) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionStarGiftPurchaseOffer(
	accepted : true,
	declined : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -8353956201240069860,
		sticker : $client->documentEmpty(
			id : 3382092624141033437,
		),
		stars : -4571772996584190400,
		availability_remains : 26,
		availability_total : 58,
		availability_resale : 3218907126482135015,
		convert_stars : -6134712670707429350,
		first_sale_date : 0,
		last_sale_date : 38,
		upgrade_stars : -437113174248802267,
		resell_min_stars : 8021467629795535638,
		title : 'KPktmlWx0zIuiXQs',
		released_by : $client->peerUser(
			user_id : -6740484305101291465,
		),
		per_user_total : 78,
		per_user_remains : 5,
		locked_until_date : 85,
		auction_slug : 'SHFsfvyObk7Gwj9i',
		gifts_per_round : 58,
		auction_start_date : 82,
		upgrade_variants : 25,
		background : $client->starGiftBackground(
			center_color : 77,
			edge_color : 33,
			text_color : 41,
		),
	),
	price : $client->starsAmount(
		amount : -2930216452646306176,
		nanos : 13,
	),
	expires_at : 58,
);
```