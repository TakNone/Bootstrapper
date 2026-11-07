# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 229

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
	message : '2hy3OjJ9GRk8bisZ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 86,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 86,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 14,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 3,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 37,
			language : 'O9aF4nG17P2Teuci',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 70,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : 476122517525130003,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 49,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 45,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 88,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : -1285630346550250177,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 78,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 58,
			date : 77,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 90,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 81,
			old_text : '38YfhQlvIBKaUxkd',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 69,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```