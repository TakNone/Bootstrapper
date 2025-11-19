# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 218

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
	inbox_date : 92,
	type : 'S8TKqF2fwvJdVQC4',
	message : 'voWU8FH7kTfwOGLm',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 78,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 51,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 72,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 27,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 4,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 63,
			language : '7AhGaObCnT5k4gip',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : -8892397264192699682,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 14,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 38,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 64,
			document_id : -1680576882494613540,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 42,
		),
	),
);
```