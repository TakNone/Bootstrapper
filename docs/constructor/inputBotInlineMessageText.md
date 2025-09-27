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
	message : 'lmxrBip2fDMHYSyC',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 60,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 0,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 55,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 68,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 29,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 7,
			language : 'iJVTeYWbBhsK72yc',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : 7162446731131669359,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 15,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 80,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 24,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 23,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 22,
			document_id : 5424688254631223071,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 24,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```