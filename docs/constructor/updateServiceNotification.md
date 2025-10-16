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
	inbox_date : 85,
	type : 'B18yuaodmbsA2VQ0',
	message : 'TqVh8fjSBCA4cOzw',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 53,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 93,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 8,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 81,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 91,
			language : '94xW2im7ZPSbGuHv',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : -8911158664076269652,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 55,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 21,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : 4241002895763986470,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 96,
		),
	),
);
```