# messages.editInlineBotMessage

**Description** : *Edit an inline bot message*

**Layer** : 225

```tl
messages.editInlineBotMessage#83557dba flags:# no_webpage:flags.1?true invert_media:flags.16?true id:InputBotInlineMessageID message:flags.11?string media:flags.14?InputMedia reply_markup:flags.2?ReplyMarkup entities:flags.3?Vector<MessageEntity> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		dc_id : 50,
		id : 656893000873708587,
		access_hash : 6476534575528660759,
	),
	message : 'OZE2gaToJ5m4Pnht',
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 81,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 10,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 33,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 91,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 86,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 68,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 43,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 48,
			language : 'fYsydvK6Skag5NCx',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : 5211297889860523524,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 6,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 58,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 73,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 7,
			document_id : -4537112297060112520,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 51,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 9,
			date : 84,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 43,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 48,
			old_text : '6hJlFRasrLpQKeCG',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 90,
		),
	),
);
```