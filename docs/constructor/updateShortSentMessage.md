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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 13,
	pts : 74,
	pts_count : 20,
	date : 36,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 38,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 98,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 70,
			language : 'IF3NxvWPYDinVJBd',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : 8402864333260250902,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 58,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 1,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 17,
			document_id : -3758636567935584053,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 69,
		),
	),
	ttl_period : 28,
);
```