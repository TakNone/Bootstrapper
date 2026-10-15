# messageActionStarGiftPurchaseOffer

**Description** : *Contains an offer to purchase a collectible gift &raquo;, see here &raquo; for the full flow*

**Layer** : 229

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
		id : 5948187627072583506,
		sticker : $client->documentEmpty(
			id : -1534113982575568736,
		),
		stars : 4514390251017748728,
		availability_remains : 58,
		availability_total : 66,
		availability_resale : 7341116122223438052,
		convert_stars : 8381826906278564455,
		first_sale_date : 96,
		last_sale_date : 81,
		upgrade_stars : -6815140020280799998,
		resell_min_stars : -4208614152840854510,
		title : 'M4kagF1YpubrRD2n',
		released_by : $client->peerUser(
			user_id : -2818919392595154844,
		),
		per_user_total : 41,
		per_user_remains : 69,
		locked_until_date : 50,
		auction_slug : 'LmMk2cTvguqxaJzt',
		gifts_per_round : 94,
		auction_start_date : 47,
		upgrade_variants : 69,
		background : $client->starGiftBackground(
			center_color : 52,
			edge_color : 5,
			text_color : 38,
		),
	),
	price : $client->starsAmount(
		amount : -1298628441163805727,
		nanos : 7,
	),
	expires_at : 79,
);
```