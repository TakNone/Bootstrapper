# savedStarGift

**Layer** : 214

```tl
savedStarGift#19a9b572 flags:# name_hidden:flags.0?true unsaved:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true pinned_to_top:flags.12?true upgrade_separate:flags.17?true from_id:flags.1?Peer date:int gift:StarGift message:flags.2?TextWithEntities msg_id:flags.3?int saved_id:flags.11?long convert_stars:flags.4?long upgrade_stars:flags.6?long can_export_at:flags.7?int transfer_stars:flags.8?long can_transfer_at:flags.13?int can_resell_at:flags.14?int collection_id:flags.15?Vector<int> prepaid_upgrade_hash:flags.16?string = SavedStarGift;
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
		user_id : 8811449384879120204,
	),
	date : 19,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : -1867261494501098229,
		sticker : $client->documentEmpty(
			id : 3691293862048771040,
		),
		stars : 4893034557532298636,
		availability_remains : 1,
		availability_total : 5,
		availability_resale : 5725226054237459375,
		convert_stars : -6676688786346866832,
		first_sale_date : 33,
		last_sale_date : 99,
		upgrade_stars : -6964255936361509645,
		resell_min_stars : 4846210430098632993,
		title : 'Mm3BYZsFeIkjz9l2',
		released_by : $client->peerUser(
			user_id : -5853492753578251191,
		),
		per_user_total : 13,
		per_user_remains : 45,
		locked_until_date : 89,
	),
	message : $client->textWithEntities(
		text : 'zL1W35bSi4aCOKg8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 97,
				length : 36,
			),
			$client->messageEntityMention(
				offset : 28,
				length : 27,
			),
			$client->messageEntityHashtag(
				offset : 24,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 69,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 14,
				length : 96,
			),
			$client->messageEntityEmail(
				offset : 79,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 23,
				length : 92,
			),
			$client->messageEntityItalic(
				offset : 59,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 2,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 51,
				length : 28,
				language : 'XuIONM5V71Rb84c9',
			),
			$client->messageEntityTextUrl(
				offset : 36,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 69,
				length : 75,
				user_id : 7532652713046321216,
			),
			$client->inputMessageEntityMentionName(
				offset : 54,
				length : 62,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 15,
				length : 9,
			),
			$client->messageEntityCashtag(
				offset : 99,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 8,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 5,
				length : 56,
			),
			$client->messageEntityBankCard(
				offset : 39,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 45,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 79,
				length : 30,
				document_id : 8677181955428809775,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 44,
				length : 62,
			),
		),
	),
	msg_id : 71,
	saved_id : -760907697316046331,
	convert_stars : 3110864170525057694,
	upgrade_stars : 291528500039815027,
	can_export_at : 60,
	transfer_stars : 8836934216685496851,
	can_transfer_at : 77,
	can_resell_at : 7,
	collection_id : array(100),
	prepaid_upgrade_hash : 'YRpDHTwbn8VZeCAN',
);
```