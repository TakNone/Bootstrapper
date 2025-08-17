# savedStarGift

**Layer** : 211

```tl
savedStarGift#1ea646df flags:# name_hidden:flags.0?true unsaved:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true pinned_to_top:flags.12?true from_id:flags.1?Peer date:int gift:StarGift message:flags.2?TextWithEntities msg_id:flags.3?int saved_id:flags.11?long convert_stars:flags.4?long upgrade_stars:flags.6?long can_export_at:flags.7?int transfer_stars:flags.8?long can_transfer_at:flags.13?int can_resell_at:flags.14?int collection_id:flags.15?Vector<int> = SavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **name_hidden** | [`flags.0?true`](type/true) | NOTHING |
| **unsaved** | [`flags.5?true`](type/true) | NOTHING |
| **refunded** | [`flags.9?true`](type/true) | NOTHING |
| **can_upgrade** | [`flags.10?true`](type/true) | NOTHING |
| **pinned_to_top** | [`flags.12?true`](type/true) | NOTHING |
| **from_id** | [`flags.1?Peer`](type/Peer) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| **message** | [`flags.2?TextWithEntities`](type/TextWithEntities) | NOTHING |
| **msg_id** | [`flags.3?int`](type/int) | NOTHING |
| **saved_id** | [`flags.11?long`](type/long) | NOTHING |
| **convert_stars** | [`flags.4?long`](type/long) | NOTHING |
| **upgrade_stars** | [`flags.6?long`](type/long) | NOTHING |
| **can_export_at** | [`flags.7?int`](type/int) | NOTHING |
| **transfer_stars** | [`flags.8?long`](type/long) | NOTHING |
| **can_transfer_at** | [`flags.13?int`](type/int) | NOTHING |
| **can_resell_at** | [`flags.14?int`](type/int) | NOTHING |
| **collection_id** | [`flags.15?Vector<int>`](type/int) | NOTHING |

---

## Type

[SavedStarGift](type/SavedStarGift)

---

## Example

```php
$savedStarGift = $client->savedStarGift(
	name_hidden : true,
	unsaved : true,
	refunded : true,
	can_upgrade : true,
	pinned_to_top : true,
	from_id : $client->peerUser(
		user_id : 7815156754667043349,
	),
	date : 82,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 5631404769732968608,
		sticker : $client->documentEmpty(
			id : 6234108367610214479,
		),
		stars : -432149824589961806,
		availability_remains : 66,
		availability_total : 53,
		availability_resale : -3806746736018919636,
		convert_stars : 2202109706184946366,
		first_sale_date : 96,
		last_sale_date : 74,
		upgrade_stars : 7924103240360131306,
		resell_min_stars : 3087055502210173436,
		title : 'SW50sFY1Gldxn934',
		released_by : $client->peerUser(
			user_id : 793158283751086392,
		),
		per_user_total : 44,
		per_user_remains : 45,
	),
	message : $client->textWithEntities(
		text : 'wdY8socmLy67h4z1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 73,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 87,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 52,
				length : 22,
			),
			$client->messageEntityBotCommand(
				offset : 20,
				length : 12,
			),
			$client->messageEntityUrl(
				offset : 27,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 18,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 69,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 25,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 86,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 37,
				length : 97,
				language : 'FdiyW49tP3EbYzKB',
			),
			$client->messageEntityTextUrl(
				offset : 56,
				length : 5,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 34,
				length : 17,
				user_id : 3217983175279747338,
			),
			$client->inputMessageEntityMentionName(
				offset : 95,
				length : 2,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 78,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 57,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 91,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 86,
				length : 51,
			),
			$client->messageEntityBankCard(
				offset : 61,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 61,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 82,
				length : 48,
				document_id : 2453661040024121589,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 94,
				length : 63,
			),
		),
	),
	msg_id : 100,
	saved_id : 2884049112254781250,
	convert_stars : 6364076250134911531,
	upgrade_stars : -1105465740350349038,
	can_export_at : 35,
	transfer_stars : -1735222585760346305,
	can_transfer_at : 62,
	can_resell_at : 26,
	collection_id : array(90),
);
```