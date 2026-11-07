# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 229

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
	message : 'QZC5atORsjdu0PvM',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 88,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 32,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 89,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 51,
			language : '49PaW1lunBjFKQkR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : -8589471377004197518,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 97,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 16,
			document_id : 5968980123985840842,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 92,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 68,
			date : 97,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 98,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 34,
			old_text : 'qYKz4di631oDJORj',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 78,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```