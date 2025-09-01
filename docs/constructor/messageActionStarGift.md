# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 214

```tl
messageActionStarGift#f24de7fa flags:# name_hidden:flags.0?true saved:flags.2?true converted:flags.3?true upgraded:flags.5?true transferred:flags.6?true refunded:flags.9?true can_upgrade:flags.10?true prepaid_upgrade:flags.13?true upgrade_separate:flags.16?true gift:StarGift message:flags.1?TextWithEntities convert_stars:flags.4?long upgrade_msg_id:flags.5?int upgrade_stars:flags.8?long from_id:flags.11?Peer peer:flags.12?Peer saved_id:flags.12?long prepaid_upgrade_hash:flags.14?string gift_msg_id:flags.15?int = MessageAction;
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
| **refunded** | [`flags.9?true`](type/true) | NOTHING |
| **can_upgrade** | [`flags.10?true`](type/true) | NOTHING |
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
	refunded : true,
	can_upgrade : true,
	prepaid_upgrade : true,
	upgrade_separate : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : 1757201381955287629,
		sticker : $client->documentEmpty(
			id : 8531667746593155413,
		),
		stars : -1075019148786752228,
		availability_remains : 28,
		availability_total : 87,
		availability_resale : -442754133642407685,
		convert_stars : 2598147290616622517,
		first_sale_date : 35,
		last_sale_date : 19,
		upgrade_stars : -1153499417227281653,
		resell_min_stars : 3580959474663122436,
		title : 'j4NA1tkPIoDhRBUJ',
		released_by : $client->peerUser(
			user_id : -1812572861568950926,
		),
		per_user_total : 5,
		per_user_remains : 15,
		locked_until_date : 87,
	),
	message : $client->textWithEntities(
		text : 'fs60g8Zt4uUKxhFW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 55,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 59,
				length : 70,
			),
			$client->messageEntityHashtag(
				offset : 4,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 21,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 43,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 65,
				length : 74,
			),
			$client->messageEntityBold(
				offset : 50,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 50,
				length : 81,
			),
			$client->messageEntityCode(
				offset : 17,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 88,
				length : 72,
				language : 'HAOhJ5wlx0a2EqTC',
			),
			$client->messageEntityTextUrl(
				offset : 63,
				length : 48,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 3,
				length : 60,
				user_id : -8516858266487302727,
			),
			$client->inputMessageEntityMentionName(
				offset : 25,
				length : 33,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 90,
				length : 59,
			),
			$client->messageEntityCashtag(
				offset : 26,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 26,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 1,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 38,
				length : 57,
			),
			$client->messageEntitySpoiler(
				offset : 61,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 51,
				length : 14,
				document_id : 6188187504110864833,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 8,
				length : 30,
			),
		),
	),
	convert_stars : -1541848724348064622,
	upgrade_msg_id : 19,
	upgrade_stars : -2756343696288770966,
	from_id : $client->peerUser(
		user_id : -8303188280149880455,
	),
	peer : $client->peerUser(
		user_id : -6548486591578928340,
	),
	saved_id : 5671448347517288426,
	prepaid_upgrade_hash : 'xKQ56zIisvSOCwbZ',
	gift_msg_id : 43,
);
```