# starGiftAuctionAcquiredGift

**Layer** : 218

```tl
starGiftAuctionAcquiredGift#ab60e20b flags:# name_hidden:flags.0?true peer:Peer date:int bid_amount:long round:int pos:int message:flags.1?TextWithEntities = StarGiftAuctionAcquiredGift;
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

---

## Type

[StarGiftAuctionAcquiredGift](type/StarGiftAuctionAcquiredGift)

---

## Example

```php
$starGiftAuctionAcquiredGift = $client->starGiftAuctionAcquiredGift(
	name_hidden : true,
	peer : $client->peerUser(
		user_id : -5123935713406391067,
	),
	date : 91,
	bid_amount : 7480638549554843879,
	round : 55,
	pos : 23,
	message : $client->textWithEntities(
		text : 'E0i6ZRAt9wWBD7s2',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 12,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 41,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 70,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 14,
				language : 'F4CghuG9SlWx1ndk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : -4837995693166732161,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 93,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 61,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : 7135767542662463698,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 52,
			),
		),
	),
);
```