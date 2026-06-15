# messageActionStarGiftPurchaseOfferDeclined

**Layer** : 227

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
		id : -5057667184166308372,
		sticker : $client->documentEmpty(
			id : 8475257860944342668,
		),
		stars : 8354018693894713212,
		availability_remains : 81,
		availability_total : 91,
		availability_resale : 1307210366731363264,
		convert_stars : 8150017130568535248,
		first_sale_date : 25,
		last_sale_date : 43,
		upgrade_stars : -5644718834802058926,
		resell_min_stars : 4028885837874632469,
		title : 'klE8Da6dZGi7qLxu',
		released_by : $client->peerUser(
			user_id : 4450361411698264506,
		),
		per_user_total : 17,
		per_user_remains : 15,
		locked_until_date : 98,
		auction_slug : 'RbXpOJZhuMd9tsTQ',
		gifts_per_round : 55,
		auction_start_date : 73,
		upgrade_variants : 80,
		background : $client->starGiftBackground(
			center_color : 16,
			edge_color : 28,
			text_color : 15,
		),
	),
	price : $client->starsAmount(
		amount : -4853297472097962837,
		nanos : 19,
	),
);
```