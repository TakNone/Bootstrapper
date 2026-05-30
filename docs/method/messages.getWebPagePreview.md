# messages.getWebPagePreview

**Description** : *Get preview of webpage*

**Layer** : 222

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
	message : 'x9NbUO3kKTfghemV',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 56,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 26,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 64,
			language : 'nDa9uoMzPYWQEd8c',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 10,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : 5125073561627667437,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 13,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 47,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -6796090456756591371,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 6,
		),
	),
);
```