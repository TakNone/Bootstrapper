# updateServiceNotification

**Description** : *A service message for the user*

**Layer** : 233

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
	inbox_date : 28,
	type : 'Lw5i7K8DRI1mrebV',
	message : 'b4xsWtqvrOQUVz3i',
	media : $client->messageMediaEmpty(),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 77,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 61,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 30,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 19,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 17,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 10,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 79,
			language : 'MvdxolhVHaeXZj05',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 19,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : 2556564372449291246,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 98,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 91,
			document_id : -4607691776089799433,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 93,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 19,
			date : 22,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 15,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 28,
			old_text : 'kdAmYKaFBUgOy79b',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 47,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 44,
		),
	),
);
```