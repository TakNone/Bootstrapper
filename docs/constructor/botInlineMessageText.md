# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 216

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
	message : 'xHL3B1gYNUMaPy7j',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 98,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 38,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 14,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : 'Jhp5aBOKziGlbQxZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 91,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : -2210581797669444318,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 37,
			document_id : 1534820197197064440,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 23,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```