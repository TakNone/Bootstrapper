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
		dc_id : 40,
		id : 8968705188967223208,
		access_hash : -8031039223695766328,
	),
	message : 'ZawkzVHTevQjSiGy',
	media : $client->inputMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 42,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 70,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 6,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 70,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 60,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 92,
			language : 'niI1v9HLodwYybJ0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 15,
			user_id : 8843120051570724733,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 23,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : -110607702104654008,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 61,
		),
	),
);
```