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
	message : 'Sqg26VtOHwkYu7hW',
	entities : array(
		$client->messageEntityUnknown(
			offset : 85,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 54,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 41,
			length : 82,
		),
		$client->messageEntityBotCommand(
			offset : 34,
			length : 69,
		),
		$client->messageEntityUrl(
			offset : 29,
			length : 87,
		),
		$client->messageEntityEmail(
			offset : 14,
			length : 70,
		),
		$client->messageEntityBold(
			offset : 19,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 97,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 36,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 71,
			length : 59,
			language : 'd2QaDfj5mSVckRop',
		),
		$client->messageEntityTextUrl(
			offset : 66,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 52,
			length : 42,
			user_id : 2749535960386197906,
		),
		$client->inputMessageEntityMentionName(
			offset : 60,
			length : 31,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 78,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 1,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 82,
			length : 72,
		),
		$client->messageEntityStrike(
			offset : 45,
			length : 43,
		),
		$client->messageEntityBankCard(
			offset : 22,
			length : 94,
		),
		$client->messageEntitySpoiler(
			offset : 18,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 96,
			length : 31,
			document_id : -509285520034750649,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 50,
			length : 82,
		),
	),
);
```