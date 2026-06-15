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
	message : 'R6L8EiADQ7SdKF2a',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 16,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 55,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 80,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 89,
			language : 'jU2GvpYuM6F0JH4t',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 87,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : 1900186998178295753,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 50,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 37,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 49,
			document_id : 7495154033851768330,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 17,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 97,
			date : 72,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 61,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 41,
			old_text : 'vP3uCAZ2hlRJjFHa',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```