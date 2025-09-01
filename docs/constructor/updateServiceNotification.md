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
	inbox_date : 59,
	type : 'v26yua5IJzPWgKc7',
	message : 'Jdv1rfRGVL6I4ozc',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 27,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 37,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 29,
			length : 89,
		),
		$client->messageEntityBotCommand(
			offset : 1,
			length : 90,
		),
		$client->messageEntityUrl(
			offset : 77,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 82,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 53,
			length : 38,
		),
		$client->messageEntityItalic(
			offset : 56,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 19,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 52,
			length : 16,
			language : 'cJ7GnjwxqpURVQuf',
		),
		$client->messageEntityTextUrl(
			offset : 53,
			length : 97,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 92,
			length : 79,
			user_id : -4240675149307819848,
		),
		$client->inputMessageEntityMentionName(
			offset : 48,
			length : 88,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 47,
			length : 100,
		),
		$client->messageEntityCashtag(
			offset : 70,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 31,
			length : 14,
		),
		$client->messageEntityStrike(
			offset : 78,
			length : 65,
		),
		$client->messageEntityBankCard(
			offset : 75,
			length : 95,
		),
		$client->messageEntitySpoiler(
			offset : 29,
			length : 93,
		),
		$client->messageEntityCustomEmoji(
			offset : 93,
			length : 50,
			document_id : 738929569462617152,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 60,
			length : 67,
		),
	),
);
```