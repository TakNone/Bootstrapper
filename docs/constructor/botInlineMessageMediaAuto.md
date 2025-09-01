# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 214

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
	message : 'fcoF3YRBP8k7sdTj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 45,
			length : 34,
		),
		$client->messageEntityMention(
			offset : 75,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 44,
			length : 92,
		),
		$client->messageEntityBotCommand(
			offset : 9,
			length : 87,
		),
		$client->messageEntityUrl(
			offset : 56,
			length : 6,
		),
		$client->messageEntityEmail(
			offset : 32,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 19,
			length : 66,
		),
		$client->messageEntityItalic(
			offset : 17,
			length : 82,
		),
		$client->messageEntityCode(
			offset : 24,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 19,
			length : 32,
			language : 'L3BeFQiOlvKnJkNV',
		),
		$client->messageEntityTextUrl(
			offset : 87,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 94,
			length : 81,
			user_id : 1670454090247112255,
		),
		$client->inputMessageEntityMentionName(
			offset : 28,
			length : 69,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 9,
			length : 55,
		),
		$client->messageEntityCashtag(
			offset : 11,
			length : 97,
		),
		$client->messageEntityUnderline(
			offset : 49,
			length : 35,
		),
		$client->messageEntityStrike(
			offset : 35,
			length : 10,
		),
		$client->messageEntityBankCard(
			offset : 6,
			length : 32,
		),
		$client->messageEntitySpoiler(
			offset : 38,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 75,
			length : 36,
			document_id : 6557294494305852872,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 52,
			length : 12,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```