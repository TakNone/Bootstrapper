# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 227

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
	message : 'j2eUxW8crwK715zn',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 49,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 33,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 59,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 53,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 81,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : '1PwxnmIH9DB2G0tC',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 4,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : 4920867882602331686,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 14,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 26,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 1,
			document_id : 8234653858238653269,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 40,
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
			date : 26,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 54,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 76,
			old_text : 'KYRJLtn45fuhypPv',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 24,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```