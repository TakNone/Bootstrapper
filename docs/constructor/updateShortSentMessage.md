# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

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
	id : 66,
	pts : 61,
	pts_count : 95,
	date : 10,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 12,
			length : 49,
		),
		$client->messageEntityMention(
			offset : 55,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 19,
			length : 64,
		),
		$client->messageEntityBotCommand(
			offset : 82,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 25,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 82,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 77,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 49,
			length : 77,
		),
		$client->messageEntityCode(
			offset : 87,
			length : 28,
		),
		$client->messageEntityPre(
			offset : 66,
			length : 96,
			language : 'T09ayNhSJjf7WqYw',
		),
		$client->messageEntityTextUrl(
			offset : 53,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 58,
			length : 53,
			user_id : -9157574530524244748,
		),
		$client->inputMessageEntityMentionName(
			offset : 77,
			length : 51,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 20,
			length : 39,
		),
		$client->messageEntityCashtag(
			offset : 23,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 29,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 70,
			length : 61,
		),
		$client->messageEntityBankCard(
			offset : 58,
			length : 8,
		),
		$client->messageEntitySpoiler(
			offset : 99,
			length : 81,
		),
		$client->messageEntityCustomEmoji(
			offset : 32,
			length : 45,
			document_id : -4579668006261310036,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 8,
			length : 16,
		),
	),
	ttl_period : 98,
);
```