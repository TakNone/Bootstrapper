# savedStarGift

**Layer** : 216

```tl
savedStarGift#8983a452 flags:# name_hidden:flags.0?true unsaved:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true pinned_to_top:flags.12?true upgrade_separate:flags.17?true from_id:flags.1?Peer date:int gift:StarGift message:flags.2?TextWithEntities msg_id:flags.3?int saved_id:flags.11?long convert_stars:flags.4?long upgrade_stars:flags.6?long can_export_at:flags.7?int transfer_stars:flags.8?long can_transfer_at:flags.13?int can_resell_at:flags.14?int collection_id:flags.15?Vector<int> prepaid_upgrade_hash:flags.16?string drop_original_details_stars:flags.18?long = SavedStarGift;
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
| **upgrade_separate** | [`flags.17?true`](type/true) | NOTHING |
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
| **prepaid_upgrade_hash** | [`flags.16?string`](type/string) | NOTHING |
| **drop_original_details_stars** | [`flags.18?long`](type/long) | NOTHING |

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
	upgrade_separate : true,
	from_id : $client->peerUser(
		user_id : 3581576992356866978,
	),
	date : 0,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		id : 8191050683598163854,
		sticker : $client->documentEmpty(
			id : -1745011538721483617,
		),
		stars : 7301206247211709677,
		availability_remains : 90,
		availability_total : 89,
		availability_resale : -1313520137379235517,
		convert_stars : -803793494994783539,
		first_sale_date : 26,
		last_sale_date : 59,
		upgrade_stars : -2783700967257460590,
		resell_min_stars : -8428901025479022562,
		title : '3smJ0C1Rp9HW8jcv',
		released_by : $client->peerUser(
			user_id : 5775105364134541107,
		),
		per_user_total : 35,
		per_user_remains : 72,
		locked_until_date : 69,
	),
	message : $client->textWithEntities(
		text : 'fMpBdCjDxiLn5bkA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : 'TEgeDiFZvHBMxVA0',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 13,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : -7842183833951520525,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 80,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 18,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 12,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 19,
				document_id : 1445679010213945218,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
		),
	),
	msg_id : 14,
	saved_id : 3720657147696555242,
	convert_stars : -4324821987683691854,
	upgrade_stars : 5299260184772805423,
	can_export_at : 96,
	transfer_stars : -1397653618580116827,
	can_transfer_at : 39,
	can_resell_at : 43,
	collection_id : array(17),
	prepaid_upgrade_hash : 'OoZE6Ues3lqxrB2w',
	drop_original_details_stars : -8687360085578525760,
);
```