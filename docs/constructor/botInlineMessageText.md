# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 229

```tl
botInlineMessageText#8c7f65e2 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.0?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | The message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageText(
	no_webpage : true,
	invert_media : true,
	message : 'aMUyPsq09crWKE4J',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 84,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 57,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 8,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 64,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 59,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 29,
			language : '016ocLTUnC5aXPYD',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 64,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : -8079342519399143684,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 75,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 41,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 87,
			document_id : -5897895950119554825,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 64,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 18,
			date : 59,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 44,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 76,
			old_text : '5k3IutDyvixMLXsq',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 8,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```