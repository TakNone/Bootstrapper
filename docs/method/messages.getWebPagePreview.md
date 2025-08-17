# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 211

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
	message : 'QjyleKHwz1Vo8fL4',
	entities : array(
		$client->messageEntityUnknown(
			offset : 31,
			length : 58,
		),
		$client->messageEntityMention(
			offset : 95,
			length : 67,
		),
		$client->messageEntityHashtag(
			offset : 59,
			length : 14,
		),
		$client->messageEntityBotCommand(
			offset : 13,
			length : 55,
		),
		$client->messageEntityUrl(
			offset : 67,
			length : 23,
		),
		$client->messageEntityEmail(
			offset : 91,
			length : 39,
		),
		$client->messageEntityBold(
			offset : 35,
			length : 30,
		),
		$client->messageEntityItalic(
			offset : 35,
			length : 48,
		),
		$client->messageEntityCode(
			offset : 64,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 3,
			length : 6,
			language : 'xZhufbXBkK057IN1',
		),
		$client->messageEntityTextUrl(
			offset : 52,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 73,
			length : 83,
			user_id : 2048997964743782684,
		),
		$client->inputMessageEntityMentionName(
			offset : 26,
			length : 24,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 86,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 35,
			length : 34,
		),
		$client->messageEntityUnderline(
			offset : 1,
			length : 82,
		),
		$client->messageEntityStrike(
			offset : 58,
			length : 35,
		),
		$client->messageEntityBankCard(
			offset : 47,
			length : 73,
		),
		$client->messageEntitySpoiler(
			offset : 58,
			length : 64,
		),
		$client->messageEntityCustomEmoji(
			offset : 21,
			length : 33,
			document_id : -8202270324790974191,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 52,
			length : 51,
		),
	),
);
```