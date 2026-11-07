# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 233

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
	message : 'pOue2ldfniMJN3ra',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 90,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 46,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 98,
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
			length : 65,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 12,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 76,
			language : 'uEqn8Km6AT1fhvS5',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 71,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : 1498096839243806251,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 38,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 60,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 32,
			document_id : 440326734574801455,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 99,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 4,
			date : 97,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 80,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 45,
			old_text : '1RrPBEnwWvF4DVi3',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 99,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 77,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```