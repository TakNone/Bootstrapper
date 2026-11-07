# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 233

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
	message : 'dZlNOj2Xxg4TaQoG',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 76,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 69,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 50,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 52,
			language : 'O9YdraUDN62bwsFM',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 48,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 13,
			user_id : -7221652547481389240,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 21,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 19,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 26,
			document_id : -4484924386493296970,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 15,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 62,
			date : 1,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 85,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 5,
			old_text : 'wiQTcEvPRzKeJubs',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 37,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 87,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```