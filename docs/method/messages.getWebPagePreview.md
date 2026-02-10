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
	message : 'SwgF418zWOyvGxNL',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 14,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 91,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 18,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'n4AEzhlIT6NfZGYp',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 64,
			user_id : -4819042061529132164,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 72,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 64,
			document_id : 5621408181119134423,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 62,
		),
	),
);
```