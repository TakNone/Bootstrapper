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
	inbox_date : 63,
	type : 'slc3vOtxepS4bdkH',
	message : 'wkg7eKazc2Cf8pNS',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 9,
			length : 40,
		),
		$client->messageEntityMention(
			offset : 41,
			length : 3,
		),
		$client->messageEntityHashtag(
			offset : 73,
			length : 36,
		),
		$client->messageEntityBotCommand(
			offset : 44,
			length : 68,
		),
		$client->messageEntityUrl(
			offset : 73,
			length : 57,
		),
		$client->messageEntityEmail(
			offset : 15,
			length : 26,
		),
		$client->messageEntityBold(
			offset : 17,
			length : 100,
		),
		$client->messageEntityItalic(
			offset : 60,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 86,
			length : 65,
		),
		$client->messageEntityPre(
			offset : 76,
			length : 37,
			language : 'U9gVkoyS3ICJDlh7',
		),
		$client->messageEntityTextUrl(
			offset : 14,
			length : 82,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 46,
			length : 16,
			user_id : -7637560261680725045,
		),
		$client->inputMessageEntityMentionName(
			offset : 11,
			length : 12,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 84,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 27,
			length : 96,
		),
		$client->messageEntityUnderline(
			offset : 12,
			length : 63,
		),
		$client->messageEntityStrike(
			offset : 66,
			length : 89,
		),
		$client->messageEntityBankCard(
			offset : 54,
			length : 75,
		),
		$client->messageEntitySpoiler(
			offset : 36,
			length : 42,
		),
		$client->messageEntityCustomEmoji(
			offset : 24,
			length : 22,
			document_id : 8343529338534216697,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 19,
			length : 36,
		),
	),
);
```