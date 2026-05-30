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
	id : 6,
	pts : 20,
	pts_count : 49,
	date : 62,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 47,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 33,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 21,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 35,
			language : 'qoaKhn9cLyXpMJ1j',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 23,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : 9132559111849603511,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 32,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 21,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 100,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 66,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 72,
			document_id : -2217271486258078350,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 59,
		),
	),
	ttl_period : 4,
);
```