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
	id : 100,
	from_id : $client->peerUser(
		user_id : -2426789791217282883,
	),
	date : 80,
	message : $client->textWithEntities(
		text : 'AfcxQia6UBZMJlNy',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 91,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 4,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 32,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 43,
				language : 'bx0QMCpmOtHR35JG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 48,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : -6796552480333410262,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 97,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 31,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 68,
				document_id : 4498760494963607401,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 60,
			),
		),
	),
	paid_message_stars : 13761738919749338,
);
```