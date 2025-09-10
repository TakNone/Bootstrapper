# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 214

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
	message : 'apGnI3eJo7V9Wmtw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 9,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 14,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 90,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 27,
			language : '8wpIF5h6xmRHytck',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 28,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 26,
			user_id : -8230271788029802281,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 35,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 29,
			document_id : 5397481150373768781,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 76,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```