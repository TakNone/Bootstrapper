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
		id : 771592901142165569,
		sticker : $client->documentEmpty(
			id : -6490628106454466805,
		),
		stars : 3748148672180358086,
		availability_remains : 91,
		availability_total : 33,
		availability_resale : -5217896044982659090,
		convert_stars : 5854594517519378607,
		first_sale_date : 42,
		last_sale_date : 86,
		upgrade_stars : -3960691039735633757,
		resell_min_stars : 5268369049144539974,
		title : 'UTM3QAIeV9bxtrLS',
		released_by : $client->peerUser(
			user_id : 6498146856040858566,
		),
		per_user_total : 25,
		per_user_remains : 27,
		locked_until_date : 47,
		auction_slug : 'pxv13uyfaYDOjQ0n',
		gifts_per_round : 56,
		auction_start_date : 33,
		upgrade_variants : 79,
		background : $client->starGiftBackground(
			center_color : 8,
			edge_color : 18,
			text_color : 81,
		),
	),
	price : $client->starsAmount(
		amount : -8503407350832238675,
		nanos : 47,
	),
);
```