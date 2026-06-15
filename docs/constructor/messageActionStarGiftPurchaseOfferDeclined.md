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
		id : -7626720467271853209,
		sticker : $client->documentEmpty(
			id : -6843951992601504336,
		),
		stars : -6529496782504444913,
		availability_remains : 95,
		availability_total : 3,
		availability_resale : 395612270656838435,
		convert_stars : -4549000230493533297,
		first_sale_date : 64,
		last_sale_date : 70,
		upgrade_stars : -8884295439269566236,
		resell_min_stars : 1569622499862602375,
		title : 'O516BS8GbMRIW9yY',
		released_by : $client->peerUser(
			user_id : -289396395949484721,
		),
		per_user_total : 80,
		per_user_remains : 97,
		locked_until_date : 21,
		auction_slug : 'FOroyKgtVMm1Z3je',
		gifts_per_round : 64,
		auction_start_date : 12,
		upgrade_variants : 14,
		background : $client->starGiftBackground(
			center_color : 49,
			edge_color : 68,
			text_color : 79,
		),
	),
	price : $client->starsAmount(
		amount : 411276418963025969,
		nanos : 63,
	),
);
```