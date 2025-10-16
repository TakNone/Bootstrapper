# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 216

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
	message : 'tUo9mSgnuhENTIs3',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 59,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 95,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 35,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 93,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 3,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : '9iLuwUPa2OxDBGCQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 46,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 99,
			user_id : -6343267252279679437,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 50,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 91,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 28,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 50,
			document_id : 1728855000095147949,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 56,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```