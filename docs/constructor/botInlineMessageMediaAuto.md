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
	message : 'yO1rZNbKCM38uEwG',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 17,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 100,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 6,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 4,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 3,
			language : 'y9g8VOSKic6RwUCu',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 86,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : -406907221067764950,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 63,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 25,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 57,
			document_id : 9095665552515204552,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 62,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```