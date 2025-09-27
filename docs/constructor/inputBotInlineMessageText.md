# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 216

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
	message : 'nMAUWatx19bqYTi8',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 66,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 31,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 48,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 21,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 0,
			language : 'oGzOPWmwLbJfsqKg',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 55,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : -1051162216620075412,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 21,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 7,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 14,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 69,
			document_id : -1633234844096497473,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 97,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```