# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 229

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
	message : 'qJhswz3U1HmeRX5W',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 13,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 65,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 97,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 85,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 70,
			language : 'Sk5rqLfEX9zOaynH',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : -2756032191249153007,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 34,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 27,
			document_id : 7941333834735048645,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 87,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 29,
			date : 15,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 26,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 21,
			old_text : '0XJLxmMkfUpnKWj9',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 89,
		),
	),
);
```