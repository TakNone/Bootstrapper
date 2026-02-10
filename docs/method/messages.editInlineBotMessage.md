# messages.editInlineBotMessage

**Description** : *Edit an inline bot message*

**Layer** : 222

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
		dc_id : 44,
		id : -1453148613217892325,
		access_hash : -362912411168699495,
	),
	message : 'mDsevNBAuOfXIxbg',
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 36,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 75,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 82,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 37,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 100,
			language : 'hbcFYzXeHjynKZ4v',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 48,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : 6900457343371410101,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 12,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 26,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 81,
			document_id : -7747514244431190729,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 90,
		),
	),
);
```