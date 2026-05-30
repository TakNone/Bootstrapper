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
		id : 4899739626814908524,
		sticker : $client->documentEmpty(
			id : 4541763496559612916,
		),
		stars : 8126573944644244569,
		availability_remains : 10,
		availability_total : 95,
		availability_resale : 8532046467030721343,
		convert_stars : -1972628762802419664,
		first_sale_date : 58,
		last_sale_date : 64,
		upgrade_stars : 5899631070572819827,
		resell_min_stars : 3537704679662418035,
		title : 'Knp1V6WMLq9P0QUf',
		released_by : $client->peerUser(
			user_id : 5341141575215181798,
		),
		per_user_total : 40,
		per_user_remains : 18,
		locked_until_date : 70,
		auction_slug : '06QEY7OzwT24NsDu',
		gifts_per_round : 22,
		auction_start_date : 13,
		upgrade_variants : 55,
		background : $client->starGiftBackground(
			center_color : 14,
			edge_color : 26,
			text_color : 19,
		),
	),
	price : $client->starsAmount(
		amount : 2873432022589167581,
		nanos : 33,
	),
	expires_at : 2,
);
```