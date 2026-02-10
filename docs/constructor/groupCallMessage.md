# groupCallMessage

**Layer** : 222

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
	id : 25,
	from_id : $client->peerUser(
		user_id : -2017277392645561577,
	),
	date : 32,
	message : $client->textWithEntities(
		text : 'hCYLovRe96GJ8kDO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 28,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 12,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 19,
				language : 'otYEmfPg6lkOu89y',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : -1367869706889509641,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 26,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 67,
				document_id : -8467259971426499310,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 81,
			),
		),
	),
	paid_message_stars : -6770944104079012572,
);
```