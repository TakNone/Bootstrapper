# messageActionStarGiftPurchaseOffer

**Layer** : 225

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
		id : -6490500019645540061,
		sticker : $client->documentEmpty(
			id : -8928338096728269497,
		),
		stars : -5331963164659125813,
		availability_remains : 66,
		availability_total : 98,
		availability_resale : -5960109834546934035,
		convert_stars : 376783458180145566,
		first_sale_date : 72,
		last_sale_date : 42,
		upgrade_stars : -4228530506225636073,
		resell_min_stars : 32388270598643267,
		title : 'wQ7fEbunB90jJdvi',
		released_by : $client->peerUser(
			user_id : -2932407452950544086,
		),
		per_user_total : 59,
		per_user_remains : 65,
		locked_until_date : 58,
		auction_slug : 'wVaXszKhtOSl6y9A',
		gifts_per_round : 21,
		auction_start_date : 97,
		upgrade_variants : 59,
		background : $client->starGiftBackground(
			center_color : 47,
			edge_color : 37,
			text_color : 79,
		),
	),
	price : $client->starsAmount(
		amount : 8459701871593322102,
		nanos : 7,
	),
	expires_at : 54,
);
```