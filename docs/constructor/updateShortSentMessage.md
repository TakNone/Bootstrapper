# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 214

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
	id : 38,
	pts : 21,
	pts_count : 75,
	date : 52,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 21,
			length : 80,
		),
		$client->messageEntityMention(
			offset : 81,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 37,
			length : 19,
		),
		$client->messageEntityBotCommand(
			offset : 51,
			length : 35,
		),
		$client->messageEntityUrl(
			offset : 21,
			length : 75,
		),
		$client->messageEntityEmail(
			offset : 93,
			length : 89,
		),
		$client->messageEntityBold(
			offset : 9,
			length : 52,
		),
		$client->messageEntityItalic(
			offset : 10,
			length : 42,
		),
		$client->messageEntityCode(
			offset : 100,
			length : 76,
		),
		$client->messageEntityPre(
			offset : 85,
			length : 18,
			language : '7vxXSq3yB6Au9zWh',
		),
		$client->messageEntityTextUrl(
			offset : 49,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 8,
			length : 79,
			user_id : 6611287386032682166,
		),
		$client->inputMessageEntityMentionName(
			offset : 32,
			length : 16,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 100,
			length : 39,
		),
		$client->messageEntityCashtag(
			offset : 100,
			length : 59,
		),
		$client->messageEntityUnderline(
			offset : 93,
			length : 2,
		),
		$client->messageEntityStrike(
			offset : 40,
			length : 68,
		),
		$client->messageEntityBankCard(
			offset : 54,
			length : 5,
		),
		$client->messageEntitySpoiler(
			offset : 29,
			length : 95,
		),
		$client->messageEntityCustomEmoji(
			offset : 13,
			length : 65,
			document_id : -5927313135820166715,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 85,
			length : 47,
		),
	),
	ttl_period : 68,
);
```