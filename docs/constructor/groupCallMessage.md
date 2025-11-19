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
	id : 24,
	from_id : $client->peerUser(
		user_id : -3454969926044990649,
	),
	date : 48,
	message : $client->textWithEntities(
		text : 'fST2UtahdAH6WLIq',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 39,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 55,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 79,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 41,
				language : 'kmPIhDdNgl7pJeLf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : 457525129225038135,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 77,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 94,
				document_id : -2849764879584536987,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
		),
	),
	paid_message_stars : -8308318826516451350,
);
```