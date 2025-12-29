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
	message : 'HZmBctzYX8T96rxW',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 2,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 3,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 71,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 33,
			language : 'sExlJi9BTNWArH7R',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 83,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : -6171174729033731494,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 100,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 73,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 61,
			document_id : -5347713254246127767,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 64,
		),
	),
);
```