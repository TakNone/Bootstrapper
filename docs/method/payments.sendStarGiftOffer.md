# payments.sendStarGiftOffer

**Description** : *Send an offer to purchase a collectible gift &raquo;, see here &raquo; for the full flow*

**Layer** : 233

```tl
payments.sendStarGiftOffer#8fb86b41 flags:# peer:InputPeer slug:string price:StarsAmount duration:int random_id:long allow_paid_stars:flags.0?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Owner of the collectible gift: equal to starGiftUnique.owner_id |
| <mark>slug</mark> | [`string`](type/string) | Identifier of the collectible gift: equal to starGiftUnique.slug |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | Offer price, in stars or TON |
| <mark>duration</mark> | [`int`](type/int) | Duration of the offer, in seconds: must be one of 21600, 43200, 86400, 129600, 172800, or 259200; can also be 120 in test mode |
| <mark>random_id</mark> | [`long`](type/long) | Random 64-bit identifier used to avoid sending the same offer twice in case of network issues. See here » for more info on random ID deduplication and updateMessageID mapping |
| **allow_paid_stars** | [`flags.0?long`](type/long) | If the destination peer has paid messages » enabled, specifies the amount of Telegram Stars the sending user has agreed to pay in order to send the offer (in addition to the amount for the offer itself, contained in price) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_STARS_AMOUNT_INVALID** | `400` | The specified offer amount in stars is invalid, see here » for the allowed range |
| **INPUT_STARS_NANOS_INVALID** | `400` | The specified offer amount in nanotons is invalid, see here » for the allowed range |
| **INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **RESELL_STARS_TOO_FEW** | `400` | The offered price is too low |
| **RESELL_STARS_TOO_MUCH** | `400` | The offered price is too high |
| **STARGIFT_OFFER_INVALID** | `400` | The specified offer amount is invalid |
| **STARGIFT_OFFER_NOT_ALLOWED** | `400` | You can't send a purchase offer for this gift |
| **STARGIFT_SLUG_INVALID** | `400` | The specified gift slug is invalid |

---

## Example

```php
$updates = $client->payments->sendStarGiftOffer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	slug : 'DLWwRB7AfV9ldHP6',
	price : $client->starsAmount(
		amount : -585189521636611216,
		nanos : 66,
	),
	duration : 4,
	random_id : -1205550623672086981,
	allow_paid_stars : -5140785177731056528,
);
```