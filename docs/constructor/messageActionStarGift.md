# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 214

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
		id : 4600918408097287799,
		sticker : $client->documentEmpty(
			id : 3953409561964375983,
		),
		stars : -3574911405580977208,
		availability_remains : 99,
		availability_total : 47,
		availability_resale : 8117155497773940225,
		convert_stars : -537217467934764610,
		first_sale_date : 79,
		last_sale_date : 15,
		upgrade_stars : -1036375306056076442,
		resell_min_stars : 8679527646003882409,
		title : '72wrasSfvHQ56exL',
		released_by : $client->peerUser(
			user_id : 536952943243231425,
		),
		per_user_total : 54,
		per_user_remains : 91,
		locked_until_date : 3,
	),
	message : $client->textWithEntities(
		text : 'J9Y05UDhasRzcEkM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 5,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 73,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 57,
				language : 'ET7yBMt4bVFKJjs9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 14,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : 3853926258602487462,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 61,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 86,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 31,
				document_id : -5799606990588002768,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 58,
			),
		),
	),
	convert_stars : 5616185722385727024,
	upgrade_msg_id : 89,
	upgrade_stars : -61984736601311396,
	from_id : $client->peerUser(
		user_id : 4206643965146000531,
	),
	peer : $client->peerUser(
		user_id : -5454602744605353066,
	),
	saved_id : 1755106815164205786,
	prepaid_upgrade_hash : 'bMmdHyY3T70wXQU8',
	gift_msg_id : 71,
);
```