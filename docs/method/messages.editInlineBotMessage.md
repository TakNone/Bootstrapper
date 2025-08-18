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
		dc_id : 28,
		id : -7410697783486348441,
		access_hash : -8062974207069991660,
	),
	message : 'mYwJvsMceXdapjFf',
	media : $client->inputMediaEmpty(),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 11,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 84,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 89,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 94,
			length : 71,
		),
		$client->messageEntityUrl(
			offset : 70,
			length : 56,
		),
		$client->messageEntityEmail(
			offset : 32,
			length : 95,
		),
		$client->messageEntityBold(
			offset : 64,
			length : 54,
		),
		$client->messageEntityItalic(
			offset : 55,
			length : 59,
		),
		$client->messageEntityCode(
			offset : 10,
			length : 34,
		),
		$client->messageEntityPre(
			offset : 54,
			length : 85,
			language : '1AOTDzFQIPNR3pwk',
		),
		$client->messageEntityTextUrl(
			offset : 4,
			length : 13,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 72,
			length : 59,
			user_id : -8663201226722757394,
		),
		$client->inputMessageEntityMentionName(
			offset : 43,
			length : 54,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 45,
			length : 10,
		),
		$client->messageEntityCashtag(
			offset : 73,
			length : 5,
		),
		$client->messageEntityUnderline(
			offset : 37,
			length : 39,
		),
		$client->messageEntityStrike(
			offset : 84,
			length : 67,
		),
		$client->messageEntityBankCard(
			offset : 62,
			length : 47,
		),
		$client->messageEntitySpoiler(
			offset : 4,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 5,
			length : 11,
			document_id : 5547745202381414931,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 73,
			length : 16,
		),
	),
);
```