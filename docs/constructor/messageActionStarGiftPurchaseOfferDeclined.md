# messageActionStarGiftPurchaseOfferDeclined

**Layer** : 225

```tl
messageActionStarGiftPurchaseOfferDeclined#73ada76b flags:# expired:flags.0?true gift:StarGift price:StarsAmount = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **expired** | [`flags.0?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionStarGiftPurchaseOfferDeclined(
	expired : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 7932937532026346088,
		sticker : $client->documentEmpty(
			id : 5173021656744802484,
		),
		stars : 5797501607148219178,
		availability_remains : 15,
		availability_total : 71,
		availability_resale : -216587315545359066,
		convert_stars : -4823483749604113499,
		first_sale_date : 34,
		last_sale_date : 4,
		upgrade_stars : 334062199196117758,
		resell_min_stars : -1681852100608870244,
		title : 'm45EoUtaL6VHr2OF',
		released_by : $client->peerUser(
			user_id : 1086394471436573438,
		),
		per_user_total : 65,
		per_user_remains : 75,
		locked_until_date : 62,
		auction_slug : 'OGkZ0Vhnd6eK7N1z',
		gifts_per_round : 47,
		auction_start_date : 76,
		upgrade_variants : 62,
		background : $client->starGiftBackground(
			center_color : 89,
			edge_color : 83,
			text_color : 36,
		),
	),
	price : $client->starsAmount(
		amount : 2244355811971827484,
		nanos : 97,
	),
);
```