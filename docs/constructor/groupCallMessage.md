# groupCallMessage

**Layer** : 218

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
	id : 89,
	from_id : $client->peerUser(
		user_id : 592126001514555396,
	),
	date : 21,
	message : $client->textWithEntities(
		text : 'oys9pcxOMrWwF3Zf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 57,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 90,
				language : 'aKHp26Gx1bhBDOFu',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 78,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : -5989797568682493808,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 16,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 17,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : -1737846432186737757,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 63,
			),
		),
	),
	paid_message_stars : 204326746958643336,
);
```