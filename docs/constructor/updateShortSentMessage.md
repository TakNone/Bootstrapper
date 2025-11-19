# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 218

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
	id : 79,
	pts : 99,
	pts_count : 15,
	date : 94,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 42,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 62,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 52,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 39,
			language : 'x4weYSTIL5CgNvot',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 33,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : 1457148948169393053,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 9,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 86,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 68,
			document_id : 6562050154171731848,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 60,
		),
	),
	ttl_period : 58,
);
```