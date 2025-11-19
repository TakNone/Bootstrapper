# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 218

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
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

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaAuto(
	invert_media : true,
	message : 'mdebxh6TI2wyVZ4M',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 18,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 94,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 80,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 71,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 85,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 61,
			language : 'QRYa0K7mALhey4lB',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 100,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : 8351702008255885893,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 68,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 81,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 17,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 9,
			document_id : -5965885103314156702,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 72,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```