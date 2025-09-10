# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 214

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
	message : 'OK2oIzBXFnGPd5Jc',
	entities : array(
		$client->messageEntityUnknown(
			offset : 23,
			length : 69,
		),
		$client->messageEntityMention(
			offset : 2,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 98,
			length : 69,
		),
		$client->messageEntityBotCommand(
			offset : 38,
			length : 5,
		),
		$client->messageEntityUrl(
			offset : 82,
			length : 81,
		),
		$client->messageEntityEmail(
			offset : 18,
			length : 100,
		),
		$client->messageEntityBold(
			offset : 1,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 5,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 24,
			length : 63,
		),
		$client->messageEntityPre(
			offset : 33,
			length : 87,
			language : 'RUeHxSEjmbdA3N08',
		),
		$client->messageEntityTextUrl(
			offset : 55,
			length : 80,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 67,
			length : 56,
			user_id : 5973769496396028162,
		),
		$client->inputMessageEntityMentionName(
			offset : 89,
			length : 28,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 79,
			length : 13,
		),
		$client->messageEntityCashtag(
			offset : 86,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 63,
			length : 37,
		),
		$client->messageEntityStrike(
			offset : 36,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 77,
			length : 56,
		),
		$client->messageEntitySpoiler(
			offset : 99,
			length : 39,
		),
		$client->messageEntityCustomEmoji(
			offset : 43,
			length : 55,
			document_id : 7181434318245418100,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 29,
			length : 77,
		),
	),
);
```