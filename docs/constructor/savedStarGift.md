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
		user_id : 2680575788887276603,
	),
	date : 51,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 5143917614459130145,
		sticker : $client->documentEmpty(
			id : -2802033166599428495,
		),
		stars : -6628660562175643618,
		availability_remains : 40,
		availability_total : 80,
		availability_resale : -4765293803043542740,
		convert_stars : 6785014640544745459,
		first_sale_date : 75,
		last_sale_date : 67,
		upgrade_stars : 6920130635862648092,
		resell_min_stars : -599298616834527975,
		title : 'up6UZdHyIqbgvakM',
		released_by : $client->peerUser(
			user_id : -4697403936991633739,
		),
		per_user_total : 22,
		per_user_remains : 11,
	),
	message : $client->textWithEntities(
		text : '3M8UCOfxS104RZ9I',
		entities : array(
			$client->messageEntityUnknown(
				offset : 7,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 15,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 94,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 86,
				length : 6,
			),
			$client->messageEntityUrl(
				offset : 22,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 75,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 30,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 13,
				length : 56,
			),
			$client->messageEntityCode(
				offset : 60,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 62,
				length : 95,
				language : 'uLmdQa7yqShNK8bX',
			),
			$client->messageEntityTextUrl(
				offset : 24,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 85,
				length : 45,
				user_id : -443470439806844013,
			),
			$client->inputMessageEntityMentionName(
				offset : 58,
				length : 37,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 68,
				length : 8,
			),
			$client->messageEntityCashtag(
				offset : 55,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 100,
				length : 39,
			),
			$client->messageEntityStrike(
				offset : 28,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 61,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 39,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 64,
				length : 92,
				document_id : 7431031996259663913,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 100,
				length : 93,
			),
		),
	),
	msg_id : 15,
	saved_id : -2183835846984525151,
	convert_stars : 5085886674036699049,
	upgrade_stars : 3566439468861084498,
	can_export_at : 53,
	transfer_stars : -9079137425229892062,
	can_transfer_at : 1,
	can_resell_at : 36,
	collection_id : array(36),
);
```