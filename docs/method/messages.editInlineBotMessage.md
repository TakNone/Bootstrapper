# messages.editInlineBotMessage

**Description** : *Edit an inline bot message*

**Layer** : 218

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
		dc_id : 56,
		id : 2700735305925797956,
		access_hash : -8275457893524607029,
	),
	message : 'x0PuqLkmGsBbMntF',
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 52,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 71,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 100,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 40,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 91,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 78,
			language : 'ABkeqUv0Y7HSF864',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 16,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : -2221193197476201822,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 66,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 37,
			document_id : 7737277298303324462,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
);
```