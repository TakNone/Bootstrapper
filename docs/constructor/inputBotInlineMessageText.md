# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 225

```tl
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.0?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageText(
	no_webpage : true,
	invert_media : true,
	message : 'YECePfdhgGFvLbIo',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 31,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 26,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 67,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 87,
			language : 'u58FZGhNapQgo106',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 62,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 54,
			user_id : 6071726726768717844,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 3,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 18,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 45,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 13,
			document_id : -9102043297853766689,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 36,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 24,
			date : 59,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 66,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 82,
			old_text : 'KnpL0Y58SsGdaZ9m',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 46,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```