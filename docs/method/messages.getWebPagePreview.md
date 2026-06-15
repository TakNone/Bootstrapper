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
	message : 'MO4CTNnS0cKv6byl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 38,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : 'GBgCrpLxNdoMWwQ5',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 56,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : 3956253006719161418,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 67,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 38,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 16,
			document_id : -457522203193124075,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 62,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 8,
			date : 51,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 91,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 33,
			old_text : '56lkgEBXxuaU9CtZ',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 60,
		),
	),
);
```