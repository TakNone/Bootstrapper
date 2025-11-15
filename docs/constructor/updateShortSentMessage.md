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
	id : 83,
	pts : 93,
	pts_count : 22,
	date : 98,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 80,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 24,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 89,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 78,
			language : 'LoE5Fb2cPpWdvhs8',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 94,
			user_id : -6268801567343906756,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 43,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 32,
			document_id : 5461719947629670141,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 63,
		),
	),
	ttl_period : 18,
);
```