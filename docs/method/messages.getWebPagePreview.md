# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 218

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
	message : 'nto3kVixUrePhYA2',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 53,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 57,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 47,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 39,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : '5h6KiJwCUeRAjBkb',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 23,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 92,
			user_id : -3397359155191793590,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 12,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 6,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 63,
			document_id : 1856327465821589803,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 68,
		),
	),
);
```