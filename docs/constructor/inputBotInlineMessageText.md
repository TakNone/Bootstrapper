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
	message : 'L8IU5ZSVydsEDT7Q',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 79,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 93,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 24,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 99,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 56,
			language : '0FYyGwHbOCuN93vE',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 27,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : 3253906710236244560,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 62,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : 9090924539170839245,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 48,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```