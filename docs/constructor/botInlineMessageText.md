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
	message : '60aW7FTcIkzdyAJZ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 62,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 93,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 94,
			length : 15,
		),
		$client->messageEntityBotCommand(
			offset : 67,
			length : 23,
		),
		$client->messageEntityUrl(
			offset : 50,
			length : 26,
		),
		$client->messageEntityEmail(
			offset : 57,
			length : 44,
		),
		$client->messageEntityBold(
			offset : 65,
			length : 32,
		),
		$client->messageEntityItalic(
			offset : 100,
			length : 43,
		),
		$client->messageEntityCode(
			offset : 27,
			length : 61,
		),
		$client->messageEntityPre(
			offset : 39,
			length : 35,
			language : 'UteZiduH5afgOwvX',
		),
		$client->messageEntityTextUrl(
			offset : 27,
			length : 4,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 74,
			length : 26,
			user_id : -2685297121572115389,
		),
		$client->inputMessageEntityMentionName(
			offset : 53,
			length : 41,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 14,
			length : 95,
		),
		$client->messageEntityCashtag(
			offset : 13,
			length : 55,
		),
		$client->messageEntityUnderline(
			offset : 90,
			length : 36,
		),
		$client->messageEntityStrike(
			offset : 54,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 55,
			length : 67,
		),
		$client->messageEntitySpoiler(
			offset : 74,
			length : 99,
		),
		$client->messageEntityCustomEmoji(
			offset : 34,
			length : 50,
			document_id : -1705968170934527096,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 46,
			length : 1,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```