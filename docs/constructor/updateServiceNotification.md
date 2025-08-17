# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 211

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
	inbox_date : 45,
	type : 'ObaWeu1yBlQx3Erf',
	message : 'L6SYbTM4FcylkmNB',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 92,
			length : 60,
		),
		$client->messageEntityMention(
			offset : 17,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 72,
			length : 100,
		),
		$client->messageEntityBotCommand(
			offset : 60,
			length : 53,
		),
		$client->messageEntityUrl(
			offset : 84,
			length : 59,
		),
		$client->messageEntityEmail(
			offset : 53,
			length : 33,
		),
		$client->messageEntityBold(
			offset : 27,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 22,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 73,
			length : 55,
		),
		$client->messageEntityPre(
			offset : 13,
			length : 90,
			language : 'z9eE07o1Put6YyBR',
		),
		$client->messageEntityTextUrl(
			offset : 5,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 10,
			length : 70,
			user_id : -2015394232906250183,
		),
		$client->inputMessageEntityMentionName(
			offset : 21,
			length : 81,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 63,
			length : 8,
		),
		$client->messageEntityCashtag(
			offset : 6,
			length : 98,
		),
		$client->messageEntityUnderline(
			offset : 68,
			length : 92,
		),
		$client->messageEntityStrike(
			offset : 33,
			length : 0,
		),
		$client->messageEntityBankCard(
			offset : 57,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 70,
			length : 80,
		),
		$client->messageEntityCustomEmoji(
			offset : 98,
			length : 93,
			document_id : -746761852905017549,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 21,
			length : 32,
		),
	),
);
```