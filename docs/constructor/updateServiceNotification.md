# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 227

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
	inbox_date : 3,
	type : 'gxdTDp4SX7kJY16z',
	message : 'Yp4JlCXvGbhoiWVw',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 86,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 27,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 95,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 43,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 85,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 100,
			language : 'vmLFZUING71iboEJ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 2,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 99,
			user_id : 5778885714314212773,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 80,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 58,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 1,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : -853737556744537909,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 30,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 37,
			date : 11,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 33,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 11,
			old_text : 'wCfHFhu6ILpJGnWx',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 98,
		),
	),
);
```