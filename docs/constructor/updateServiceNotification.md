# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 225

```tl
updateServiceNotification#ebe46819 flags:# popup:flags.0?true invert_media:flags.2?true inbox_date:flags.1?int type:string message:string media:MessageMedia entities:Vector<MessageEntity> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **popup** | [`flags.0?true`](type/true) | If set, the message must be displayed in a popup |
| **invert_media** | [`flags.2?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **inbox_date** | [`flags.1?int`](type/int) | When was the notification receivedThe message must also be stored locally as part of the message history with the user id 777000 (Telegram Notifications) |
| <mark>type</mark> | [`string`](type/string) | String, identical in format and contents to the type field in API errors. Describes type of service message. It is acceptable to ignore repeated messages of the same type within a short period of time (15 minutes) |
| <mark>message</mark> | [`string`](type/string) | Message text |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | Media content (optional) |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateServiceNotification(
	popup : true,
	invert_media : true,
	inbox_date : 9,
	type : 'tQHLTJiFez7lUgso',
	message : 'YFfA84WVMr0UndD2',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 57,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 75,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 71,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 54,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 90,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : 'LCUZ3T2kIdl9oXrn',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : -1866547418303338251,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 65,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 18,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -2479525600060587199,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 83,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 83,
			date : 84,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 50,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 24,
			old_text : 'haQ4HJ9EuqNg52Ap',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 16,
		),
	),
);
```