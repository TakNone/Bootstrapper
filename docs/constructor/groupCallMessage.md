# groupCallMessage

**Layer** : 225

```tl
groupCallMessage#1a8afc7e flags:# from_admin:flags.1?true id:int from_id:Peer date:int message:TextWithEntities paid_message_stars:flags.0?long = GroupCallMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **from_admin** | [`flags.1?true`](type/true) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| <mark>from_id</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **paid_message_stars** | [`flags.0?long`](type/long) | NOTHING |

---

## Type

[GroupCallMessage](type/GroupCallMessage)

---

## Example

```php
$groupCallMessage = $client->groupCallMessage(
	from_admin : true,
	id : 28,
	from_id : $client->peerUser(
		user_id : 3832705327171766557,
	),
	date : 21,
	message : $client->textWithEntities(
		text : 'wbUB87qXzi4yPfNs',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 19,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 69,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 81,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 40,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 75,
				language : 'mOsXulF96cpn0ZSD',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 46,
				user_id : 2564868499173692514,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : 9089475571573257315,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 30,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 17,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 6,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 19,
				old_text : 'bVL2vgA0698ENifI',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 70,
			),
		),
	),
	paid_message_stars : -8205891475843142562,
);
```