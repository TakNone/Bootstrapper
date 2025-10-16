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
	message : '0iPm8CnMpUz32qrs',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 73,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 100,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 35,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 80,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 26,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 40,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 68,
			language : 'IkMu85ShojNaX6Zd',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 56,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : -6777416187426734896,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 39,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 11,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 37,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 0,
			document_id : 8644671824359821849,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 38,
		),
	),
);
```