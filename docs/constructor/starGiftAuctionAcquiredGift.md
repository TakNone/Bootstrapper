# starGiftAuctionAcquiredGift

**Layer** : 227

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
		user_id : -4956511439360394758,
	),
	date : 45,
	bid_amount : -5194008891341646850,
	round : 15,
	pos : 61,
	message : $client->textWithEntities(
		text : 'bZ7fVLKYulamXx1W',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 75,
				language : 'HZOedn596tPqrpal',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : -8954410351629339569,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 93,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 75,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 57,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 96,
				document_id : 3015457798060830599,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 94,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 41,
				date : 58,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 87,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 84,
				old_text : '7QgOPHTxXmkU8Veb',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 12,
			),
		),
	),
	gift_num : 9,
);
```