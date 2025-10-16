# messages.editInlineBotMessage

**Description** : *Edit an inline bot message*

**Layer** : 216

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
		dc_id : 37,
		id : -1582117048201864111,
		access_hash : -4184142122147128832,
	),
	message : 'DL3R68G7tpWubgzC',
	media : $client->inputMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 32,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 93,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 72,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 45,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 68,
			language : 'qunX7dMUVTSlfOsk',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 21,
			user_id : 6331037686481567607,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 23,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 70,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 2,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 26,
			document_id : -7319323402186743970,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 55,
		),
	),
);
```