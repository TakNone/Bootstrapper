# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact (the destination chat has to be extracted from the method call that returned this object)*

**Layer** : 211

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
	id : 73,
	pts : 3,
	pts_count : 41,
	date : 40,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 41,
			length : 56,
		),
		$client->messageEntityMention(
			offset : 86,
			length : 7,
		),
		$client->messageEntityHashtag(
			offset : 16,
			length : 40,
		),
		$client->messageEntityBotCommand(
			offset : 75,
			length : 89,
		),
		$client->messageEntityUrl(
			offset : 32,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 58,
			length : 87,
		),
		$client->messageEntityBold(
			offset : 5,
			length : 25,
		),
		$client->messageEntityItalic(
			offset : 10,
			length : 89,
		),
		$client->messageEntityCode(
			offset : 73,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 91,
			length : 68,
			language : 'Ay8KhYrPc9qGDnxu',
		),
		$client->messageEntityTextUrl(
			offset : 6,
			length : 67,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 64,
			length : 8,
			user_id : -2536983257797942120,
		),
		$client->inputMessageEntityMentionName(
			offset : 7,
			length : 51,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 51,
			length : 6,
		),
		$client->messageEntityCashtag(
			offset : 9,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 10,
			length : 9,
		),
		$client->messageEntityStrike(
			offset : 2,
			length : 8,
		),
		$client->messageEntityBankCard(
			offset : 92,
			length : 48,
		),
		$client->messageEntitySpoiler(
			offset : 87,
			length : 15,
		),
		$client->messageEntityCustomEmoji(
			offset : 1,
			length : 78,
			document_id : -8105392112085963855,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 71,
			length : 51,
		),
	),
	ttl_period : 18,
);
```