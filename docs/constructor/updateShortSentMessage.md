# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 233

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
	id : 81,
	pts : 58,
	pts_count : 21,
	date : 36,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 31,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 38,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 49,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 49,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 53,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 41,
			language : 'yqVfaC97t6Ex3mbQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 56,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : 2989345454284344769,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 11,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 18,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : 2150975488137765514,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 76,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 93,
			date : 9,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 35,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 30,
			old_text : '2WHcmFxNoa4ud8nS',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 3,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 44,
		),
	),
	ttl_period : 72,
);
```