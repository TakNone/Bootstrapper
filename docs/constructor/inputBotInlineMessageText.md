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
	message : 'zu8NasRHoMJ1Q2nA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 67,
			length : 44,
		),
		$client->messageEntityMention(
			offset : 48,
			length : 86,
		),
		$client->messageEntityHashtag(
			offset : 91,
			length : 94,
		),
		$client->messageEntityBotCommand(
			offset : 31,
			length : 21,
		),
		$client->messageEntityUrl(
			offset : 14,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 69,
			length : 36,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 45,
		),
		$client->messageEntityItalic(
			offset : 99,
			length : 65,
		),
		$client->messageEntityCode(
			offset : 48,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 66,
			length : 87,
			language : '3EMC0JiVwFA9k2LD',
		),
		$client->messageEntityTextUrl(
			offset : 45,
			length : 42,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 11,
			length : 42,
			user_id : 8736212360047670897,
		),
		$client->inputMessageEntityMentionName(
			offset : 10,
			length : 32,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 83,
			length : 21,
		),
		$client->messageEntityCashtag(
			offset : 59,
			length : 42,
		),
		$client->messageEntityUnderline(
			offset : 33,
			length : 80,
		),
		$client->messageEntityStrike(
			offset : 38,
			length : 34,
		),
		$client->messageEntityBankCard(
			offset : 68,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 62,
			length : 18,
		),
		$client->messageEntityCustomEmoji(
			offset : 4,
			length : 62,
			document_id : -328981209566563241,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 45,
			length : 94,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```