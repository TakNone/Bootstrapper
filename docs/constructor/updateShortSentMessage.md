# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 222

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
	id : 50,
	pts : 37,
	pts_count : 49,
	date : 23,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 22,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 69,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 90,
			language : 'UAh5KNp9WyVl7cCY',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 6,
			user_id : 4804579281237965119,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 49,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 99,
			document_id : 3916678337583965223,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 48,
		),
	),
	ttl_period : 60,
);
```