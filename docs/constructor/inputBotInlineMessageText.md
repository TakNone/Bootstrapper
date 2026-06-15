# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 227

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
	message : 'ubw2WzfATi13Zt9e',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 73,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 33,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 55,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 82,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 77,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 92,
			language : 'y2pkNZPA73SxWiHI',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 7,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 69,
			user_id : 521861283629519412,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 18,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 62,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 72,
			document_id : -9075438581649165147,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 87,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 95,
			date : 79,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 71,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 0,
			old_text : 'RzDAjHok5Zxm0CpO',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 11,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```