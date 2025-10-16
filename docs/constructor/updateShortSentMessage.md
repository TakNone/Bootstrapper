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
	id : 73,
	pts : 81,
	pts_count : 54,
	date : 9,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 83,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 18,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 80,
			language : 'yFm68ZsJrY1vBcCG',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 39,
			user_id : -6916598699733038796,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 36,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 8,
			document_id : -8613705583700808142,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 37,
		),
	),
	ttl_period : 60,
);
```