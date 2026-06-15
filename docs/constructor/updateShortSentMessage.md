# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 227

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
	id : 40,
	pts : 1,
	pts_count : 51,
	date : 21,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 36,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 85,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 19,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 37,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 17,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 42,
			language : 'pAx0RQdwrBPl13KI',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 66,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : 1579066741687347181,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 82,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 60,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 70,
			document_id : 9172366728435399006,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 78,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 19,
			date : 7,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 41,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 63,
			old_text : '64zMBWmjP5oIc9Kb',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 51,
		),
	),
	ttl_period : 21,
);
```