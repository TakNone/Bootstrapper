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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'qfHPLpUQ0Ov1chik',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 26,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 20,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 88,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 21,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 87,
			language : '5cKRPb2T8NHFEU4v',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 88,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : 2778294378217589622,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 11,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 48,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 19,
			document_id : 7564325688289449956,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 2,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```