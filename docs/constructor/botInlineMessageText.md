# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 211

```tl
botInlineMessageText#8c7f65e2 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'pOqD4Vy7mQZriIxk',
	entities : array(
		$client->messageEntityUnknown(
			offset : 87,
			length : 26,
		),
		$client->messageEntityMention(
			offset : 47,
			length : 59,
		),
		$client->messageEntityHashtag(
			offset : 8,
			length : 37,
		),
		$client->messageEntityBotCommand(
			offset : 13,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 26,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 76,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 73,
			length : 39,
		),
		$client->messageEntityItalic(
			offset : 97,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 15,
			length : 24,
		),
		$client->messageEntityPre(
			offset : 56,
			length : 53,
			language : 'WD78xSv5hByfIQFu',
		),
		$client->messageEntityTextUrl(
			offset : 78,
			length : 86,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 83,
			length : 68,
			user_id : 1654389114211440579,
		),
		$client->inputMessageEntityMentionName(
			offset : 67,
			length : 84,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 55,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 14,
			length : 42,
		),
		$client->messageEntityUnderline(
			offset : 23,
			length : 13,
		),
		$client->messageEntityStrike(
			offset : 46,
			length : 100,
		),
		$client->messageEntityBankCard(
			offset : 41,
			length : 78,
		),
		$client->messageEntitySpoiler(
			offset : 28,
			length : 70,
		),
		$client->messageEntityCustomEmoji(
			offset : 8,
			length : 1,
			document_id : -1100885279484638805,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 90,
			length : 84,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```