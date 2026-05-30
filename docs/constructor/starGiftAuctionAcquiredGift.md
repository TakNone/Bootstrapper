# starGiftAuctionAcquiredGift

**Layer** : 225

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
		user_id : -5130775631857332054,
	),
	date : 57,
	bid_amount : -873842258576228961,
	round : 23,
	pos : 70,
	message : $client->textWithEntities(
		text : 'J9VQqeOvDCGfEy6N',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 23,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 2,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 92,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 52,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'gZYk1UIdPpfvB70K',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 64,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : 8593838008104204512,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 9,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 20,
				document_id : 8635437252855721165,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 100,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 77,
				date : 75,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 89,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 95,
				old_text : 'qzkiP0hKbO64N1Bw',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 33,
			),
		),
	),
	gift_num : 60,
);
```