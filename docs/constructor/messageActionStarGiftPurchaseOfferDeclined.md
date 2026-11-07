# messageActionStarGiftPurchaseOfferDeclined

**Description** : *A collectible gift purchase offer &raquo; was declined, or the offer expired, see here &raquo; for the full flow*

**Layer** : 233

```tl
messageActionStarGiftPurchaseOfferDeclined#73ada76b flags:# expired:flags.0?true gift:StarGift price:StarsAmount = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **expired** | [`flags.0?true`](type/true) | If set, the owner didn't act before the messageActionStarGiftPurchaseOffer.expires_at deadline and the offer expired automatically; otherwise, the owner explicitly declined the offer |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The collectible gift the declined or expired offer was about |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | Offered price that is refunded automatically to the buyer |

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
		id : -6494457176140158917,
		sticker : $client->documentEmpty(
			id : -8865867172551282807,
		),
		stars : -2731139547182345641,
		availability_remains : 19,
		availability_total : 56,
		availability_resale : -7056929747394309697,
		convert_stars : 7500945729300900297,
		first_sale_date : 66,
		last_sale_date : 89,
		upgrade_stars : -7096535125454461299,
		resell_min_stars : -5679097054639128094,
		title : 'hcMmHNikA2GBEl7P',
		released_by : $client->peerUser(
			user_id : -6122209526232187441,
		),
		per_user_total : 6,
		per_user_remains : 52,
		locked_until_date : 16,
		auction_slug : 'JrRGW5cfDme4SjIY',
		gifts_per_round : 12,
		auction_start_date : 11,
		upgrade_variants : 17,
		background : $client->starGiftBackground(
			center_color : 98,
			edge_color : 62,
			text_color : 8,
		),
	),
	price : $client->starsAmount(
		amount : -3603401909285788542,
		nanos : 19,
	),
);
```