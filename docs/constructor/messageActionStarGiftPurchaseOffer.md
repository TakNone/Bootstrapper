# messageActionStarGiftPurchaseOffer

**Layer** : 222

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
		id : 8820912005957826366,
		sticker : $client->documentEmpty(
			id : 8355928433594841835,
		),
		stars : -7943374393972140742,
		availability_remains : 31,
		availability_total : 78,
		availability_resale : -8109526021579313143,
		convert_stars : -8227824449988851722,
		first_sale_date : 98,
		last_sale_date : 23,
		upgrade_stars : -977833306312645761,
		resell_min_stars : 6950733415143428474,
		title : 'zEgB6ZOTrnFdbi9Y',
		released_by : $client->peerUser(
			user_id : 1578727298993832913,
		),
		per_user_total : 35,
		per_user_remains : 41,
		locked_until_date : 33,
		auction_slug : 'b6Esv51fKwLA9OnJ',
		gifts_per_round : 46,
		auction_start_date : 7,
		upgrade_variants : 73,
		background : $client->starGiftBackground(
			center_color : 65,
			edge_color : 92,
			text_color : 78,
		),
	),
	price : $client->starsAmount(
		amount : 3183653330944761168,
		nanos : 19,
	),
	expires_at : 72,
);
```