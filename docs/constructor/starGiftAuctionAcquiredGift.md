# starGiftAuctionAcquiredGift

**Layer** : 218

```tl
starGiftAuctionAcquiredGift#ab60e20b flags:# name_hidden:flags.0?true peer:Peer date:int bid_amount:long round:int pos:int message:flags.1?TextWithEntities = StarGiftAuctionAcquiredGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **name_hidden** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| <mark>bid_amount</mark> | [`long`](type/long) | NOTHING |
| <mark>round</mark> | [`int`](type/int) | NOTHING |
| <mark>pos</mark> | [`int`](type/int) | NOTHING |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[StarGiftAuctionAcquiredGift](type/StarGiftAuctionAcquiredGift)

---

## Example

```php
$starGiftAuctionAcquiredGift = $client->starGiftAuctionAcquiredGift(
	name_hidden : true,
	peer : $client->peerUser(
		user_id : -7861525301155123193,
	),
	date : 10,
	bid_amount : 4568593426851716681,
	round : 36,
	pos : 78,
	message : $client->textWithEntities(
		text : 'xnmkL3VTKs82uJgF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 39,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 5,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 96,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 78,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 27,
				language : 's70USMxAXPT9Joql',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 63,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : 2719255200859694646,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 59,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 7,
				document_id : -1728194980566747002,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 27,
			),
		),
	),
);
```