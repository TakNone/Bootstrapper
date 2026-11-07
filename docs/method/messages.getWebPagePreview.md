# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 233

```tl
messages.getWebPagePreview#570d6f6f flags:# message:string entities:flags.3?Vector<MessageEntity> = messages.WebPagePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>message</mark> | [`string`](type/string) | Message from which to extract the preview |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Result

[messages.WebPagePreview](type/messages.WebPagePreview)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |

---

## Example

```php
$messagesWebPagePreview = $client->messages->getWebPagePreview(
	message : 'yVUhNT7PYzBIeXt6',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 11,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 93,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 13,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 31,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : 'FfxtLyWcsAYzhIEZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 31,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : 1717201071848450868,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 92,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 44,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 15,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 44,
			document_id : 175743746187951450,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 44,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 63,
			date : 92,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 27,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 84,
			old_text : 'njdlqu8wQ7fys69t',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 2,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 90,
		),
	),
);
```