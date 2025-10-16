# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 216

```tl
messageActionStarGift#f24de7fa flags:# name_hidden:flags.0?true saved:flags.2?true converted:flags.3?true upgraded:flags.5?true transferred:flags.6?true refunded:flags.9?true can_upgrade:flags.10?true prepaid_upgrade:flags.13?true upgrade_separate:flags.16?true gift:StarGift message:flags.1?TextWithEntities convert_stars:flags.4?long upgrade_msg_id:flags.5?int upgrade_stars:flags.8?long from_id:flags.11?Peer peer:flags.12?Peer saved_id:flags.12?long prepaid_upgrade_hash:flags.14?string gift_msg_id:flags.15?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **name_hidden** | [`flags.0?true`](type/true) | If set, the name of the sender of the gift will be hidden if the destination user decides to display the gift on their profile |
| **saved** | [`flags.2?true`](type/true) | Whether this gift was added to the destination user's profile (may be toggled using payments.saveStarGift and fetched using payments.getSavedStarGifts) |
| **converted** | [`flags.3?true`](type/true) | Whether this gift was converted to Telegram Stars and cannot be displayed on the profile anymore |
| **upgraded** | [`flags.5?true`](type/true) | This gift was upgraded to a collectible gift » |
| **transferred** | [`flags.6?true`](type/true) | NOTHING |
| **refunded** | [`flags.9?true`](type/true) | This gift is not available anymore because a request to refund the payment related to this gift was made, and the money was returned |
| **can_upgrade** | [`flags.10?true`](type/true) | If set, this gift can be upgraded to a collectible gift; can only be set for the receiver of a gift |
| **prepaid_upgrade** | [`flags.13?true`](type/true) | The sender has already pre-paid for the upgrade of this gift to a collectible gift |
| **upgrade_separate** | [`flags.16?true`](type/true) | This service message is the notification of a separate pre-payment for the upgrade of a gift we own |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | Info about the gift |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Additional message from the sender of the gift |
| **convert_stars** | [`flags.4?long`](type/long) | The receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page.convert_stars will be equal to stars only if the gift was bought using recently bought Telegram Stars, otherwise it will be less than stars |
| **upgrade_msg_id** | [`flags.5?int`](type/int) | If set, this gift was upgraded to a collectible gift, and the corresponding messageActionStarGiftUnique is available at the specified message ID |
| **upgrade_stars** | [`flags.8?long`](type/long) | The number of Telegram Stars the user can pay to convert the gift into a collectible gift » |
| **from_id** | [`flags.11?Peer`](type/Peer) | Sender of the gift (unset for anonymous gifts) |
| **peer** | [`flags.12?Peer`](type/Peer) | Receiver of the gift |
| **saved_id** | [`flags.12?long`](type/long) | For channel gifts, ID to use in inputSavedStarGiftChat constructors |
| **prepaid_upgrade_hash** | [`flags.14?string`](type/string) | Hash to prepay for a gift upgrade separately » |
| **gift_msg_id** | [`flags.15?int`](type/int) | For separate upgrades, the identifier of the message with the gift whose upgrade was prepaid (only valid for the receiver of the service message) |

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
		peer_color_available : true,
		id : 6695232549044601669,
		sticker : $client->documentEmpty(
			id : -4362986960710224156,
		),
		stars : -1453301454833098858,
		availability_remains : 37,
		availability_total : 34,
		availability_resale : 3268730125135046287,
		convert_stars : 6949561609377678160,
		first_sale_date : 14,
		last_sale_date : 34,
		upgrade_stars : 121665811377892393,
		resell_min_stars : 2649010735012880379,
		title : 'mVogrlvEFJsnGdax',
		released_by : $client->peerUser(
			user_id : -3461424451902970965,
		),
		per_user_total : 26,
		per_user_remains : 21,
		locked_until_date : 50,
	),
	message : $client->textWithEntities(
		text : 'VFbRdawJcp19meqN',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 66,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 17,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'scqO35JNWZDFteIf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 82,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : 6503840935452915121,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 47,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 81,
				document_id : 2083008206702219510,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 30,
			),
		),
	),
	convert_stars : -2063375492085978704,
	upgrade_msg_id : 33,
	upgrade_stars : -7863166248739987522,
	from_id : $client->peerUser(
		user_id : 1339188911641457010,
	),
	peer : $client->peerUser(
		user_id : 5739230167037947697,
	),
	saved_id : -1006934907672116572,
	prepaid_upgrade_hash : 'XeLt4lDVIMQn5Gzx',
	gift_msg_id : 81,
);
```