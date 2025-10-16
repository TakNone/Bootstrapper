# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 216

```tl
updateServiceNotification#ebe46819 flags:# popup:flags.0?true invert_media:flags.2?true inbox_date:flags.1?int type:string message:string media:MessageMedia entities:Vector<MessageEntity> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	inbox_date : 6,
	type : 'sqYXTDl2wf7zLO4d',
	message : 'KlpL96PqQFzIGhZS',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 66,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 63,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 96,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 50,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 71,
			language : 'NbjDhH8KPkI5LMe2',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 100,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : -782336289650802066,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 17,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 79,
			document_id : -3103534682206085370,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 94,
		),
	),
);
```