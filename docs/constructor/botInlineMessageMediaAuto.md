# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 227

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
	message : 'Q0Ku7pX63Pmq9ZSL',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 9,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 90,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 46,
			language : '6ga5IC3uYx0nFKAQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 1,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : -4285294710800282922,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 76,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 80,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 87,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 86,
			document_id : 3005594184941287596,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 30,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 96,
			date : 100,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 28,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 0,
			old_text : 'WROHNKEauYt0BGJo',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 70,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```