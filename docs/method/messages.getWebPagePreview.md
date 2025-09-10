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
	message : '9TxIAdS7K8eGqCZw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 32,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 90,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 17,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : 'VKT5itBQZIDWzOUG',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 11,
			user_id : 2987527307887561811,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 7,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 46,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 91,
			document_id : -7858231851831899040,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 89,
		),
	),
);
```