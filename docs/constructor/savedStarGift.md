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
		user_id : -8348090660143681884,
	),
	date : 73,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : 5750505756358654599,
		sticker : $client->documentEmpty(
			id : 4693973754614473078,
		),
		stars : -6946781345980857940,
		availability_remains : 79,
		availability_total : 16,
		availability_resale : 8049233498816204921,
		convert_stars : -9088506288517751472,
		first_sale_date : 22,
		last_sale_date : 46,
		upgrade_stars : 4354953868372847612,
		resell_min_stars : 6584294420111981768,
		title : 'fw5zAFNpLZUXvyle',
		released_by : $client->peerUser(
			user_id : 1971582722709872541,
		),
		per_user_total : 7,
		per_user_remains : 91,
		locked_until_date : 95,
	),
	message : $client->textWithEntities(
		text : 'UoJeVMdXb7nt2mCS',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 61,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 60,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 54,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 36,
				language : 'jJQOrfI5qYGDW1d3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : 3833690101449040146,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 67,
				document_id : -5530313801068939476,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 28,
			),
		),
	),
	msg_id : 72,
	saved_id : 1072566518054661239,
	convert_stars : 3967856065432015046,
	upgrade_stars : -7511188467745447803,
	can_export_at : 61,
	transfer_stars : -2583206944487086663,
	can_transfer_at : 50,
	can_resell_at : 85,
	collection_id : array(52),
	prepaid_upgrade_hash : 'tWurObDhLnoCXiqk',
);
```