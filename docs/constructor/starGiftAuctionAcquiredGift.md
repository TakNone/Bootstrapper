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
		user_id : 2085418103469350511,
	),
	date : 85,
	bid_amount : 5405390822536359385,
	round : 83,
	pos : 67,
	message : $client->textWithEntities(
		text : 'kR4fmTHXSwyIWh6Q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 11,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 35,
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
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 76,
				language : '3LBE6r1PRiItKTjY',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : -8622121185087858139,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 52,
				document_id : 5656071765190832042,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 100,
			),
		),
	),
);
```