# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 227

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
	message : 'bnE5IJ2G0mcf7hAN',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 41,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 7,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 40,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 72,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 14,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 47,
			language : '0fjsKJtUwLk4c3Ci',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : -1842401902726328362,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 8,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 40,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 30,
			document_id : -7795376403348432795,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 94,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 11,
			date : 4,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 46,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 25,
			old_text : '5mkgs8iKFbUvRSWA',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 0,
		),
	),
);
```