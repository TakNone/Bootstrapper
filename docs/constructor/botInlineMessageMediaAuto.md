# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 218

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
	message : 'J73yasu6p1NzKw2Y',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 7,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 61,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 41,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 45,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : 'xPf3GKDUuN49Qsyh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : 7419312374535034633,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 19,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 97,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : -6239201332064198831,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```