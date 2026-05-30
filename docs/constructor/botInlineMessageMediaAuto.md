# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 222

```tl
botInlineMessageMediaAuto#764cf810 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'tNAmzMsfvPBw5hUT',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 23,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 56,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 65,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 67,
			language : '0Z9qNisevXn1jUT3',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 0,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : 4219377876043565533,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 28,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 31,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 5,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 9,
			document_id : -6668627920164013521,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 74,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```