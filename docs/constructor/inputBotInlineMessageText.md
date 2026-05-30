# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 222

```tl
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'D8FqfHAIGTOxa0lm',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 77,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 63,
			language : 'GpnMwDt9Ak2eUryP',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 6,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : 4724512481593505620,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 76,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 1,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 87,
			document_id : 1903131667306653800,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 100,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```