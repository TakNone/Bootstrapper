# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 225

```tl
botInlineMessageMediaAuto#764cf810 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
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

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaAuto(
	invert_media : true,
	message : 'FMwinZlpbdaxvSrs',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 53,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 92,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 45,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 38,
			language : 'qpJ7NvEwHPLTrXaj',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : -6479810786046940152,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 86,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 23,
			document_id : 4776404898072568256,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 22,
			date : 46,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 48,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 91,
			old_text : '70oOdkBLvz6puTZf',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 15,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```