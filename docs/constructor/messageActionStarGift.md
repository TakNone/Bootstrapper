# messageActionStarGift

**Description** : *You received a gift, see here » for more info*

**Layer** : 211

```tl
messageActionStarGift#4717e8a4 flags:# name_hidden:flags.0?true saved:flags.2?true converted:flags.3?true upgraded:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true gift:StarGift message:flags.1?TextWithEntities convert_stars:flags.4?long upgrade_msg_id:flags.5?int upgrade_stars:flags.8?long from_id:flags.11?Peer peer:flags.12?Peer saved_id:flags.12?long = MessageAction;
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
| **refunded** | [`flags.9?true`](type/true) | NOTHING |
| **can_upgrade** | [`flags.10?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | Info about the gift |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Additional message from the sender of the gift |
| **convert_stars** | [`flags.4?long`](type/long) | The receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page.convert_stars will be equal to stars only if the gift was bought using recently bought Telegram Stars, otherwise it will be less than stars |
| **upgrade_msg_id** | [`flags.5?int`](type/int) | NOTHING |
| **upgrade_stars** | [`flags.8?long`](type/long) | NOTHING |
| **from_id** | [`flags.11?Peer`](type/Peer) | NOTHING |
| **peer** | [`flags.12?Peer`](type/Peer) | NOTHING |
| **saved_id** | [`flags.12?long`](type/long) | NOTHING |

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
	refunded : true,
	can_upgrade : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 7372735673945285350,
		sticker : $client->documentEmpty(
			id : 3484995474729647186,
		),
		stars : 1704874996343620689,
		availability_remains : 12,
		availability_total : 19,
		availability_resale : 3518300342026006086,
		convert_stars : 679315752223600347,
		first_sale_date : 77,
		last_sale_date : 57,
		upgrade_stars : 4067408965823270109,
		resell_min_stars : -3170374520918500016,
		title : '7XN8R4SWj2g10LsJ',
		released_by : $client->peerUser(
			user_id : 3246175777846151579,
		),
		per_user_total : 89,
		per_user_remains : 89,
	),
	message : $client->textWithEntities(
		text : 'eqO4iUJauHCkowtR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 87,
				length : 93,
			),
			$client->messageEntityMention(
				offset : 27,
				length : 72,
			),
			$client->messageEntityHashtag(
				offset : 53,
				length : 72,
			),
			$client->messageEntityBotCommand(
				offset : 78,
				length : 87,
			),
			$client->messageEntityUrl(
				offset : 56,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 84,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 38,
				length : 49,
			),
			$client->messageEntityItalic(
				offset : 83,
				length : 72,
			),
			$client->messageEntityCode(
				offset : 64,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 61,
				length : 37,
				language : 'zAhcj0tWiMdYEwgQ',
			),
			$client->messageEntityTextUrl(
				offset : 81,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : -5767301894016847737,
			),
			$client->inputMessageEntityMentionName(
				offset : 74,
				length : 39,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 22,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 5,
				length : 81,
			),
			$client->messageEntityUnderline(
				offset : 37,
				length : 80,
			),
			$client->messageEntityStrike(
				offset : 66,
				length : 75,
			),
			$client->messageEntityBankCard(
				offset : 47,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 26,
				length : 91,
			),
			$client->messageEntityCustomEmoji(
				offset : 85,
				length : 75,
				document_id : -290782685977315329,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 85,
				length : 60,
			),
		),
	),
	convert_stars : 1715690983155348740,
	upgrade_msg_id : 21,
	upgrade_stars : 1783373300843010932,
	from_id : $client->peerUser(
		user_id : -2885652436107838664,
	),
	peer : $client->peerUser(
		user_id : 8934826331963046260,
	),
	saved_id : -2658415980281133517,
);
```