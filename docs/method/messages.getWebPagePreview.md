# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 225

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
	message : 'UebP16JgIOMilF4k',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 3,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 8,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 21,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 12,
			language : 'csN40IqtiMO2L3lA',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 23,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 23,
			user_id : -2831011329097131755,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 70,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 51,
			document_id : -2233924813732229779,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 95,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 34,
			date : 62,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 20,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 86,
			old_text : 'sNARWLtS5qbmI0EC',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 75,
		),
	),
);
```