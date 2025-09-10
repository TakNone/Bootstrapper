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
	id : 8,
	pts : 51,
	pts_count : 16,
	date : 57,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 16,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 99,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 61,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 21,
			language : 'MVa8QJArZFHy0inL',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : 3476223134720278320,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 13,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 23,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 80,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 51,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 60,
			document_id : 3619817942817919466,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
	),
	ttl_period : 69,
);
```