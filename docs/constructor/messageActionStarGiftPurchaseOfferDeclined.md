# messageActionStarGiftPurchaseOfferDeclined

**Description** : *A collectible gift purchase offer &raquo; was declined, or the offer expired, see here &raquo; for the full flow*

**Layer** : 229

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
		id : 5410390947576701620,
		sticker : $client->documentEmpty(
			id : 8823482179613252831,
		),
		stars : 3143779770434431846,
		availability_remains : 72,
		availability_total : 55,
		availability_resale : 4061792682807651456,
		convert_stars : 5759892961626358312,
		first_sale_date : 85,
		last_sale_date : 69,
		upgrade_stars : 8578093832572327291,
		resell_min_stars : 4481610907060870696,
		title : 'Ku70CY3qtXxfVQv9',
		released_by : $client->peerUser(
			user_id : -7708437727302698136,
		),
		per_user_total : 74,
		per_user_remains : 63,
		locked_until_date : 68,
		auction_slug : 'B6leOkuz1LNW0mno',
		gifts_per_round : 2,
		auction_start_date : 11,
		upgrade_variants : 4,
		background : $client->starGiftBackground(
			center_color : 76,
			edge_color : 64,
			text_color : 2,
		),
	),
	price : $client->starsAmount(
		amount : 3624502957366511270,
		nanos : 16,
	),
);
```