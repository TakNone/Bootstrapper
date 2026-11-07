# messageActionStarGiftPurchaseOffer

**Description** : *Contains an offer to purchase a collectible gift &raquo;, see here &raquo; for the full flow*

**Layer** : 233

```tl
messageActionStarGiftPurchaseOffer#774278d4 flags:# accepted:flags.0?true declined:flags.1?true gift:StarGift price:StarsAmount expires_at:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **accepted** | [`flags.0?true`](type/true) | If set, the gift owner accepted this offer |
| **declined** | [`flags.1?true`](type/true) | If set, the gift owner declined this offer |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The collectible gift the offer is about |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | Offered price |
| <mark>expires_at</mark> | [`int`](type/int) | Offer expiration date (UNIX timestamp): if the owner doesn't act before this date, the offer will expire and the buyer will be refunded automatically |

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
		id : -3792125372355006283,
		sticker : $client->documentEmpty(
			id : -2903024036967287023,
		),
		stars : -7594553822657984867,
		availability_remains : 85,
		availability_total : 67,
		availability_resale : 1810605474569470077,
		convert_stars : 8499943596113788471,
		first_sale_date : 76,
		last_sale_date : 11,
		upgrade_stars : -586984371551530761,
		resell_min_stars : -7303036783640238603,
		title : 'YjLpNmf8zZFCoSJM',
		released_by : $client->peerUser(
			user_id : 5558380904563661814,
		),
		per_user_total : 15,
		per_user_remains : 91,
		locked_until_date : 14,
		auction_slug : 'PB8pSeRWyHuqEJrx',
		gifts_per_round : 35,
		auction_start_date : 16,
		upgrade_variants : 95,
		background : $client->starGiftBackground(
			center_color : 54,
			edge_color : 88,
			text_color : 14,
		),
	),
	price : $client->starsAmount(
		amount : 1510984666572154817,
		nanos : 19,
	),
	expires_at : 68,
);
```