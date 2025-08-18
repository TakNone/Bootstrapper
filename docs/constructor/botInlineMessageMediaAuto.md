# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 211

```tl
botInlineMessageMediaAuto#764cf810 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaAuto(
	invert_media : true,
	message : 'T35KPiMpUAxScsqh',
	entities : array(
		$client->messageEntityUnknown(
			offset : 50,
			length : 85,
		),
		$client->messageEntityMention(
			offset : 49,
			length : 22,
		),
		$client->messageEntityHashtag(
			offset : 65,
			length : 41,
		),
		$client->messageEntityBotCommand(
			offset : 77,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 7,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 36,
			length : 66,
		),
		$client->messageEntityBold(
			offset : 27,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 21,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 59,
			length : 78,
		),
		$client->messageEntityPre(
			offset : 21,
			length : 68,
			language : 'WzRgHLwrcEsD0O7v',
		),
		$client->messageEntityTextUrl(
			offset : 93,
			length : 77,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 68,
			length : 78,
			user_id : 6630875794073580349,
		),
		$client->inputMessageEntityMentionName(
			offset : 3,
			length : 87,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 30,
			length : 74,
		),
		$client->messageEntityCashtag(
			offset : 85,
			length : 86,
		),
		$client->messageEntityUnderline(
			offset : 12,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 4,
			length : 21,
		),
		$client->messageEntityBankCard(
			offset : 39,
			length : 58,
		),
		$client->messageEntitySpoiler(
			offset : 3,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 7,
			length : 49,
			document_id : 2372122469342415408,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 58,
			length : 19,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```