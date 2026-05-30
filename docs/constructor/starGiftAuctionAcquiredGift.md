# starGiftAuctionAcquiredGift

**Layer** : 222

```tl
starGiftAuctionAcquiredGift#42b00348 flags:# name_hidden:flags.0?true peer:Peer date:int bid_amount:long round:int pos:int message:flags.1?TextWithEntities gift_num:flags.2?int = StarGiftAuctionAcquiredGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **name_hidden** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| <mark>bid_amount</mark> | [`long`](type/long) | NOTHING |
| <mark>round</mark> | [`int`](type/int) | NOTHING |
| <mark>pos</mark> | [`int`](type/int) | NOTHING |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | NOTHING |
| **gift_num** | [`flags.2?int`](type/int) | NOTHING |

---

## Type

[StarGiftAuctionAcquiredGift](type/StarGiftAuctionAcquiredGift)

---

## Example

```php
$starGiftAuctionAcquiredGift = $client->starGiftAuctionAcquiredGift(
	name_hidden : true,
	peer : $client->peerUser(
		user_id : 9020196689918095502,
	),
	date : 94,
	bid_amount : 6502132473911523620,
	round : 70,
	pos : 13,
	message : $client->textWithEntities(
		text : 'mEcI7AUJKojDWPZV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 31,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 14,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'IpSgs4ZRWtqO7biB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 95,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 71,
				user_id : -3777615677526290117,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 11,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 36,
				document_id : 1758753993975955637,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 100,
			),
		),
	),
	gift_num : 95,
);
```