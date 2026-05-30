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
	inbox_date : 94,
	type : 'tL9m4KijASEbzhHY',
	message : 'iNr1pt4AhsXSnFCe',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 0,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 0,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 27,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 92,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 12,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 0,
			language : 'msjoKMuHbUWTxSF0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 81,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : -2550469673520430030,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 100,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 43,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 81,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 4,
			document_id : 4643974209027513503,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 60,
		),
	),
);
```