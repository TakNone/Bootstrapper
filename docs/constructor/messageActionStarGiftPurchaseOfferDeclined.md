# messageActionStarGiftPurchaseOfferDeclined

**Layer** : 222

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
		id : 4670361195499128870,
		sticker : $client->documentEmpty(
			id : -3786463119073283636,
		),
		stars : -7786276308433339288,
		availability_remains : 5,
		availability_total : 27,
		availability_resale : 5828842150922652075,
		convert_stars : -6748311811251970639,
		first_sale_date : 71,
		last_sale_date : 34,
		upgrade_stars : 5726411497231422461,
		resell_min_stars : -3688061259398883441,
		title : 'lIGp4d7ugOxy6Dtj',
		released_by : $client->peerUser(
			user_id : -7662404192122507974,
		),
		per_user_total : 31,
		per_user_remains : 95,
		locked_until_date : 42,
		auction_slug : 'Kq5x3Fybv7AelTIc',
		gifts_per_round : 82,
		auction_start_date : 2,
		upgrade_variants : 95,
		background : $client->starGiftBackground(
			center_color : 52,
			edge_color : 43,
			text_color : 16,
		),
	),
	price : $client->starsAmount(
		amount : -6881263346552023652,
		nanos : 80,
	),
);
```