# updateShortSentMessage

**Description** : *Shortened constructor containing info on one outgoing message to a contact \(the destination chat has to be extracted from the method call that returned this object\)*

**Layer** : 229

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
	id : 83,
	pts : 49,
	pts_count : 9,
	date : 21,
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 72,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 10,
			language : 'aTKFHL6O5t247XRl',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 1,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : -6898638502657090516,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 98,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 91,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 8,
			document_id : -2995833597670366555,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 36,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 64,
			date : 40,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 8,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 22,
			old_text : 'BcmUdyNwLtRshODY',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 73,
		),
	),
	ttl_period : 36,
);
```