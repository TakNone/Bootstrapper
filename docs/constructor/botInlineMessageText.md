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
	message : 'VBNaTSpMzkUD4JAs',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 12,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 29,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 74,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 83,
			language : 'a72vugXx5IlJREUz',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : 7804522121810987328,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 86,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 15,
			document_id : -2874827593104549945,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 82,
			date : 86,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 18,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 75,
			old_text : 'O5TJxn2vjqVCS03u',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 32,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```