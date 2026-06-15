# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 227

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaAuto(
	invert_media : true,
	message : 'OmlQibtEAVG8BWCr',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 76,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 0,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 60,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 51,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 78,
			language : 'dpMAJLDIkPfUl8zT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 63,
			user_id : -5040765055512078245,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 37,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 99,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 60,
			document_id : 2170699735642945102,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 41,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 85,
			date : 93,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 90,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 31,
			old_text : 'ZbtPuEJjcFQ12Avf',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 82,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```