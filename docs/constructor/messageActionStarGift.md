# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

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
		id : -290824923215351364,
		sticker : $client->documentEmpty(
			id : -1239427604738446228,
		),
		stars : 911079792505020948,
		availability_remains : 97,
		availability_total : 50,
		availability_resale : -3289609164168396537,
		convert_stars : -2764818637686069008,
		first_sale_date : 22,
		last_sale_date : 21,
		upgrade_stars : 7220288128034324753,
		resell_min_stars : -6325666046240568759,
		title : 'zyAFYWIsKGZMdurk',
		released_by : $client->peerUser(
			user_id : 5090612390830750927,
		),
		per_user_total : 73,
		per_user_remains : 50,
	),
	message : $client->textWithEntities(
		text : 'df9XIsxGARPh4Uuk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 24,
				length : 30,
			),
			$client->messageEntityMention(
				offset : 8,
				length : 70,
			),
			$client->messageEntityHashtag(
				offset : 99,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 59,
				length : 33,
			),
			$client->messageEntityUrl(
				offset : 30,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 44,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 67,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 38,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 11,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 67,
				length : 29,
				language : 'mWSREK6Dwy4I1Ppl',
			),
			$client->messageEntityTextUrl(
				offset : 27,
				length : 20,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 81,
				length : 48,
				user_id : 2991163980915824223,
			),
			$client->inputMessageEntityMentionName(
				offset : 78,
				length : 21,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 20,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 80,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 22,
				length : 17,
			),
			$client->messageEntityStrike(
				offset : 13,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 2,
				length : 30,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCustomEmoji(
				offset : 21,
				length : 32,
				document_id : 2533053714763441779,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 74,
			),
		),
	),
	convert_stars : 1012011807477790882,
	upgrade_msg_id : 21,
	upgrade_stars : 8828035943949080276,
	from_id : $client->peerUser(
		user_id : -2828455907037013007,
	),
	peer : $client->peerUser(
		user_id : 2325236381285142308,
	),
	saved_id : -3000706408705736150,
);
```