# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 216

```tl
updateShortSentMessage#9015e101 flags:# out:flags.1?true id:int pts:int pts_count:int date:int media:flags.9?MessageMedia entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| <mark>id</mark> | [`int`](type/int) | ID of the sent message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |
| <mark>date</mark> | [`int`](type/int) | date |
| **media** | [`flags.9?MessageMedia`](type/MessageMedia) | Attached media |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Entities for styled text |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShortSentMessage(
	out : true,
	id : 96,
	pts : 49,
	pts_count : 60,
	date : 72,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 20,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 3,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 93,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 82,
			language : '7dOp8MbiwnVLJUYq',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : 3039472289009729372,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 78,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 15,
			document_id : -4915372015159411888,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 77,
		),
	),
	ttl_period : 50,
);
```