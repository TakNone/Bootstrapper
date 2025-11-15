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
	message : 'xVFA87b04PznR2YC',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 38,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 78,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 18,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 42,
			language : 'NfbD7jC6UcwpQrdR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 45,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : -5878696161318241369,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 49,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 52,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 22,
			document_id : -7603992245024362788,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 37,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```