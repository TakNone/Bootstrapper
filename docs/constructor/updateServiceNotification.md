# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 222

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
	inbox_date : 25,
	type : 'jJAtD493VbRIc5aw',
	message : '2Y35FjRSTb1tnraG',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 1,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 32,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 14,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 36,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 16,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 85,
			language : 'dIrgaGZvubmwTJRW',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 17,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : 6289697262749899557,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 36,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 1,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 92,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 55,
			document_id : 2384700757123236172,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 88,
		),
	),
);
```