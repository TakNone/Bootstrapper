# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 225

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
	message : 'UEt5lOWnaBHyFYgz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 45,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 50,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 20,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 28,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 56,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : '9WNraVXOQyAY3oST',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 58,
			user_id : 1420613963490312984,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 63,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 21,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 80,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 73,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 4,
			document_id : 624760407985480104,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 71,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 88,
			date : 63,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 26,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 47,
			old_text : 'qwAU2eIg3ORFnc1Z',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 3,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```