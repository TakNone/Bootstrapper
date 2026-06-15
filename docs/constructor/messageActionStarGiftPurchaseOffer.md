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
		id : 8788170077479760301,
		sticker : $client->documentEmpty(
			id : -7358169727615950824,
		),
		stars : 9180478819710871594,
		availability_remains : 51,
		availability_total : 27,
		availability_resale : 5843060580227461418,
		convert_stars : 3821499612063076374,
		first_sale_date : 77,
		last_sale_date : 66,
		upgrade_stars : -3456691358332022820,
		resell_min_stars : 5580200422873415622,
		title : 'aDwRjhV4qSc3NUWv',
		released_by : $client->peerUser(
			user_id : -1430353966471922751,
		),
		per_user_total : 41,
		per_user_remains : 35,
		locked_until_date : 0,
		auction_slug : '3G5m0dtRrVPTUfHD',
		gifts_per_round : 44,
		auction_start_date : 33,
		upgrade_variants : 44,
		background : $client->starGiftBackground(
			center_color : 84,
			edge_color : 55,
			text_color : 85,
		),
	),
	price : $client->starsAmount(
		amount : -8759897480064265419,
		nanos : 72,
	),
	expires_at : 13,
);
```