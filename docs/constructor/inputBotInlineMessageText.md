# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 214

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
	message : 'mzZ9V3M6lTixrjPA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 58,
			length : 63,
		),
		$client->messageEntityMention(
			offset : 67,
			length : 83,
		),
		$client->messageEntityHashtag(
			offset : 15,
			length : 90,
		),
		$client->messageEntityBotCommand(
			offset : 14,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 34,
			length : 16,
		),
		$client->messageEntityEmail(
			offset : 20,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 95,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 93,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 36,
			length : 43,
		),
		$client->messageEntityPre(
			offset : 31,
			length : 11,
			language : 'GJfX1eOpLwn6tvTN',
		),
		$client->messageEntityTextUrl(
			offset : 9,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 73,
			length : 15,
			user_id : -4523273609281495564,
		),
		$client->inputMessageEntityMentionName(
			offset : 15,
			length : 38,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 7,
			length : 70,
		),
		$client->messageEntityCashtag(
			offset : 92,
			length : 80,
		),
		$client->messageEntityUnderline(
			offset : 44,
			length : 55,
		),
		$client->messageEntityStrike(
			offset : 63,
			length : 63,
		),
		$client->messageEntityBankCard(
			offset : 49,
			length : 92,
		),
		$client->messageEntitySpoiler(
			offset : 23,
			length : 55,
		),
		$client->messageEntityCustomEmoji(
			offset : 81,
			length : 15,
			document_id : 8393332445468802573,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 5,
			length : 34,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```