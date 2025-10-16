# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 216

```tl
messageActionStarGift#f24de7fa flags:# name_hidden:flags.0?true saved:flags.2?true converted:flags.3?true upgraded:flags.5?true transferred:flags.6?true can_upgrade:flags.10?true refunded:flags.9?true prepaid_upgrade:flags.13?true upgrade_separate:flags.16?true gift:StarGift message:flags.1?TextWithEntities convert_stars:flags.4?long upgrade_msg_id:flags.5?int upgrade_stars:flags.8?long from_id:flags.11?Peer peer:flags.12?Peer saved_id:flags.12?long prepaid_upgrade_hash:flags.14?string gift_msg_id:flags.15?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **name_hidden** | [`flags.0?true`](type/true) | If set, the name of the sender of the gift will be hidden if the destination user decides to display the gift on their profile |
| **saved** | [`flags.2?true`](type/true) | Whether this gift was added to the destination user's profile (may be toggled using payments.saveStarGift and fetched using payments.getUserStarGifts) |
| **converted** | [`flags.3?true`](type/true) | Whether this gift was converted to Telegram Stars and cannot be displayed on the profile anymore |
| **upgraded** | [`flags.5?true`](type/true) | NOTHING |
| **transferred** | [`flags.6?true`](type/true) | NOTHING |
| **can_upgrade** | [`flags.10?true`](type/true) | NOTHING |
| **refunded** | [`flags.9?true`](type/true) | NOTHING |
| **prepaid_upgrade** | [`flags.13?true`](type/true) | NOTHING |
| **upgrade_separate** | [`flags.16?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | Info about the gift |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Additional message from the sender of the gift |
| **convert_stars** | [`flags.4?long`](type/long) | The receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page.convert_stars will be equal to stars only if the gift was bought using recently bought Telegram Stars, otherwise it will be less than stars |
| **upgrade_msg_id** | [`flags.5?int`](type/int) | NOTHING |
| **upgrade_stars** | [`flags.8?long`](type/long) | NOTHING |
| **from_id** | [`flags.11?Peer`](type/Peer) | NOTHING |
| **peer** | [`flags.12?Peer`](type/Peer) | NOTHING |
| **saved_id** | [`flags.12?long`](type/long) | NOTHING |
| **prepaid_upgrade_hash** | [`flags.14?string`](type/string) | NOTHING |
| **gift_msg_id** | [`flags.15?int`](type/int) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionStarGift(
	name_hidden : true,
	saved : true,
	converted : true,
	upgraded : true,
	transferred : true,
	can_upgrade : true,
	refunded : true,
	prepaid_upgrade : true,
	upgrade_separate : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		id : -6361041563286279684,
		sticker : $client->documentEmpty(
			id : -743828870590768484,
		),
		stars : 5428140584786318356,
		availability_remains : 77,
		availability_total : 66,
		availability_resale : -4684108566047595117,
		convert_stars : -2196499355017589758,
		first_sale_date : 42,
		last_sale_date : 60,
		upgrade_stars : -7313544587239322251,
		resell_min_stars : 1499037533886045489,
		title : '3BZSnpwfsbxKrT7m',
		released_by : $client->peerUser(
			user_id : 3274236077439721127,
		),
		per_user_total : 44,
		per_user_remains : 43,
		locked_until_date : 42,
	),
	message : $client->textWithEntities(
		text : 'MCzDYQ0Hxbk9NjoP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 93,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 26,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 73,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : 'YOz3HBGSda4utWn0',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : 6322444466736102603,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 71,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 33,
				document_id : -7642769308162932262,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 67,
			),
		),
	),
	convert_stars : -8266591705084886704,
	upgrade_msg_id : 50,
	upgrade_stars : -7747840028411007206,
	from_id : $client->peerUser(
		user_id : -1366039117189788834,
	),
	peer : $client->peerUser(
		user_id : 7276068411586163091,
	),
	saved_id : 1527592419627988342,
	prepaid_upgrade_hash : 'xeL0WBZfaHIcTudt',
	gift_msg_id : 50,
);
```