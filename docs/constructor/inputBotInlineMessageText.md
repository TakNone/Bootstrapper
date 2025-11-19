# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 218

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
	message : 'zb5PGLpm1VvtQ23j',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 66,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 64,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 66,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : '2HVYd1FT6XmeGfDK',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 87,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 63,
			user_id : -6211136177922920620,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 18,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 98,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : 663278706510677153,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 46,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```