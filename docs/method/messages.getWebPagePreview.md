# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 216

```tl
messages.getWebPagePreview#570d6f6f flags:# message:string entities:flags.3?Vector<MessageEntity> = messages.WebPagePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'DdWksHbjQ8Mp2JyK',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 53,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 15,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 65,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 23,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : 'tqnuVmaUh2lcd3CE',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 93,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : -8549664485619562843,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 40,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -3352931983575574385,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 99,
		),
	),
);
```