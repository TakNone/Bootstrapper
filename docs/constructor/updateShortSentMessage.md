# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 225

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
	id : 69,
	pts : 85,
	pts_count : 19,
	date : 65,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 93,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 31,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 58,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 23,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 24,
			language : '8GJf53XnjVo6DxAN',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 80,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : -8119230047609509229,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 27,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 100,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 32,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 97,
			document_id : -4765552631428729564,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 99,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 22,
			date : 55,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 62,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 3,
			old_text : 'yJRcxrbM6g4iWdK5',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 99,
		),
	),
	ttl_period : 60,
);
```