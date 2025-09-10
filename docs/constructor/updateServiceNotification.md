# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 214

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
	inbox_date : 21,
	type : '64ZLDNvz9iMtTpCk',
	message : 'JOawQtKe3uoIX7rM',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 80,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 33,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 64,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 49,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 57,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 85,
			language : 'sRumFznUBoEqWy8v',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 43,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 39,
			user_id : 7053413068541352836,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 18,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 10,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 4,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : 1145937919269674031,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 77,
		),
	),
);
```