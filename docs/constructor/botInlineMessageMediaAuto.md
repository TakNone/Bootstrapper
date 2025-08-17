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
	message : 'um8WkCpBoredGniR',
	entities : array(
		$client->messageEntityUnknown(
			offset : 83,
			length : 5,
		),
		$client->messageEntityMention(
			offset : 40,
			length : 27,
		),
		$client->messageEntityHashtag(
			offset : 54,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 28,
			length : 15,
		),
		$client->messageEntityUrl(
			offset : 83,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 70,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 52,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 67,
			length : 8,
		),
		$client->messageEntityCode(
			offset : 6,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 25,
			length : 35,
			language : 'OYhcdnNVg3tERv8J',
		),
		$client->messageEntityTextUrl(
			offset : 75,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 74,
			length : 35,
			user_id : -4255152989369087235,
		),
		$client->inputMessageEntityMentionName(
			offset : 20,
			length : 43,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 39,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 46,
			length : 23,
		),
		$client->messageEntityUnderline(
			offset : 38,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 52,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 72,
			length : 12,
		),
		$client->messageEntitySpoiler(
			offset : 78,
			length : 73,
		),
		$client->messageEntityCustomEmoji(
			offset : 30,
			length : 58,
			document_id : -1399599448289670817,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 94,
			length : 94,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```