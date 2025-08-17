# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 211

```tl
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.0?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageText(
	no_webpage : true,
	invert_media : true,
	message : 'Rd9Iiv0Q2FOw34rX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 18,
			length : 40,
		),
		$client->messageEntityMention(
			offset : 55,
			length : 92,
		),
		$client->messageEntityHashtag(
			offset : 77,
			length : 56,
		),
		$client->messageEntityBotCommand(
			offset : 71,
			length : 90,
		),
		$client->messageEntityUrl(
			offset : 49,
			length : 16,
		),
		$client->messageEntityEmail(
			offset : 14,
			length : 42,
		),
		$client->messageEntityBold(
			offset : 8,
			length : 81,
		),
		$client->messageEntityItalic(
			offset : 10,
			length : 26,
		),
		$client->messageEntityCode(
			offset : 94,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 50,
			length : 42,
			language : 'bB3Nq5fUWeQ2LY0h',
		),
		$client->messageEntityTextUrl(
			offset : 49,
			length : 81,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 59,
			length : 43,
			user_id : -5512804601790509307,
		),
		$client->inputMessageEntityMentionName(
			offset : 71,
			length : 12,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 46,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 19,
			length : 35,
		),
		$client->messageEntityUnderline(
			offset : 17,
			length : 86,
		),
		$client->messageEntityStrike(
			offset : 3,
			length : 45,
		),
		$client->messageEntityBankCard(
			offset : 39,
			length : 48,
		),
		$client->messageEntitySpoiler(
			offset : 43,
			length : 34,
		),
		$client->messageEntityCustomEmoji(
			offset : 74,
			length : 34,
			document_id : -2019579091643545946,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 81,
			length : 13,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```