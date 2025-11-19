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
	message : 'cb7zQU1pnq950a64',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 14,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 38,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 87,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 7,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : 't2GrKRVjYPLNvuQ8',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : 165867363268345450,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 80,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 28,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : -6291596408346779487,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 50,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```