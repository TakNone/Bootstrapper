# messages.editInlineBotMessage

**Description** : *Edit an inline bot message*

**Layer** : 211

```tl
messages.editInlineBotMessage#83557dba flags:# no_webpage:flags.1?true invert_media:flags.16?true id:InputBotInlineMessageID message:flags.11?string media:flags.14?InputMedia reply_markup:flags.2?ReplyMarkup entities:flags.3?Vector<MessageEntity> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.16?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>id</mark> | [`InputBotInlineMessageID`](type/InputBotInlineMessageID) | Sent inline message ID |
| **message** | [`flags.11?string`](type/string) | Message |
| **media** | [`flags.14?InputMedia`](type/InputMedia) | Media |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Reply markup for inline keyboards |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUTTON_DATA_INVALID** | `400` | The data of one or more of the buttons you provided is invalid |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MESSAGE_NOT_MODIFIED** | `400` | The provided message data is identical to the previous message data, the message wasn't modified |

---

## Example

```php
$bool = $client->messages->editInlineBotMessage(
	no_webpage : true,
	invert_media : true,
	id : $client->inputBotInlineMessageID(
		dc_id : 20,
		id : 2112419558953492997,
		access_hash : 7098280418381463882,
	),
	message : '0o7ICFHqgNbV1LTn',
	media : $client->inputMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 84,
			length : 97,
		),
		$client->messageEntityMention(
			offset : 61,
			length : 49,
		),
		$client->messageEntityHashtag(
			offset : 27,
			length : 92,
		),
		$client->messageEntityBotCommand(
			offset : 8,
			length : 3,
		),
		$client->messageEntityUrl(
			offset : 72,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 50,
			length : 91,
		),
		$client->messageEntityBold(
			offset : 76,
			length : 11,
		),
		$client->messageEntityItalic(
			offset : 51,
			length : 43,
		),
		$client->messageEntityCode(
			offset : 21,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 46,
			length : 39,
			language : 'jOUMSYDxNQ9nwrt5',
		),
		$client->messageEntityTextUrl(
			offset : 26,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 65,
			length : 95,
			user_id : 3916275171394017072,
		),
		$client->inputMessageEntityMentionName(
			offset : 36,
			length : 42,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 20,
			length : 52,
		),
		$client->messageEntityCashtag(
			offset : 72,
			length : 26,
		),
		$client->messageEntityUnderline(
			offset : 86,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 28,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 71,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 58,
			length : 72,
		),
		$client->messageEntityCustomEmoji(
			offset : 30,
			length : 58,
			document_id : 1668977438395462953,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 41,
			length : 45,
		),
	),
);
```