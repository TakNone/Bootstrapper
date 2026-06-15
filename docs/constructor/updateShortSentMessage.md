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
	id : 35,
	pts : 72,
	pts_count : 10,
	date : 52,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 64,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 21,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 89,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 49,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 21,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 93,
			language : '2cLbseaFITwmDMPg',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 92,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : -6193673004752276707,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 34,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 76,
			document_id : 2187379739758961783,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 85,
			date : 22,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 1,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 82,
			old_text : 'coC1g6KfT79ldqEN',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 92,
		),
	),
	ttl_period : 15,
);
```