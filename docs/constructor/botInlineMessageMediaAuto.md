# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 216

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
	message : 'PNa3vEzi6wpgCuth',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 9,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 71,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 89,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 79,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 8,
			language : 'FL6nNxIMX5VaDc2m',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 23,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : -6625699668291456735,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 78,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 62,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 2,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : -8226745108795886443,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 86,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```