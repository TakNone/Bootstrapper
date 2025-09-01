# messages.editInlineBotMessage

**Description** : *Edit an inline bot message*

**Layer** : 214

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
		dc_id : 70,
		id : -7336930631239576050,
		access_hash : 4338445484053816555,
	),
	message : 'FzZgPdbu3xOD1v0h',
	media : $client->inputMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 92,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 16,
			length : 48,
		),
		$client->messageEntityHashtag(
			offset : 10,
			length : 27,
		),
		$client->messageEntityBotCommand(
			offset : 92,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 70,
			length : 48,
		),
		$client->messageEntityEmail(
			offset : 57,
			length : 87,
		),
		$client->messageEntityBold(
			offset : 18,
			length : 33,
		),
		$client->messageEntityItalic(
			offset : 90,
			length : 95,
		),
		$client->messageEntityCode(
			offset : 7,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 58,
			length : 45,
			language : 'W0nOzUD9jhxNX1Pa',
		),
		$client->messageEntityTextUrl(
			offset : 44,
			length : 39,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 40,
			length : 27,
			user_id : -2766072917625059045,
		),
		$client->inputMessageEntityMentionName(
			offset : 48,
			length : 6,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 23,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 12,
			length : 45,
		),
		$client->messageEntityUnderline(
			offset : 25,
			length : 95,
		),
		$client->messageEntityStrike(
			offset : 79,
			length : 89,
		),
		$client->messageEntityBankCard(
			offset : 59,
			length : 43,
		),
		$client->messageEntitySpoiler(
			offset : 81,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 87,
			length : 23,
			document_id : -3071536608537191229,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 67,
			length : 77,
		),
	),
);
```