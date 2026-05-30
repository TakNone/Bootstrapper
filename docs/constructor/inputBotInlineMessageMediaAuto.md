# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 225

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
	message : 'TknFcw26aeYh0zWx',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 24,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 69,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 23,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 28,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 97,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 45,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 62,
			language : 'zetdwpYD01J3I76G',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 47,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 87,
			user_id : 5423178955591269181,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 98,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 89,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 4,
			document_id : 2227586095803898347,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 8,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 35,
			date : 89,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 44,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 96,
			old_text : 't8YbmGqouneUjrgL',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 58,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```