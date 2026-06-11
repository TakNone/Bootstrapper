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
	inbox_date : 90,
	type : 'xhZ0WSYwMXEk87VI',
	message : 'mwB6uGAMkNZlgV7X',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 24,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 14,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 97,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 89,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 0,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 69,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'Ff6rl9RdX24BP08Z',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 57,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : -1592069299635104277,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 2,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 55,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : -447699451782112983,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 48,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 60,
			date : 40,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 85,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 65,
			old_text : '4KnW2fO3dkbcVSha',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 72,
		),
	),
);
```