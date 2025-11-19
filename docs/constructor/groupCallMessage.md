# groupCallMessage

**Layer** : 218

```tl
groupCallMessage#1a8afc7e flags:# from_admin:flags.1?true id:int from_id:Peer date:int message:TextWithEntities paid_message_stars:flags.0?long = GroupCallMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
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
	id : 97,
	from_id : $client->peerUser(
		user_id : 5268679566333234221,
	),
	date : 83,
	message : $client->textWithEntities(
		text : '1oFG5pg2ORXkz7wy',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 68,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 83,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 27,
				language : 'KA9287fs6zwYiWIN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 5,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : 5534369474629213003,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 77,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 15,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 97,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 74,
				document_id : 4642775783919754277,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 33,
			),
		),
	),
	paid_message_stars : -611069187658273383,
);
```