# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 222

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : '5VHlnt0zNgRZxJSo',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 3,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 48,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 47,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 61,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 71,
			language : '902qERUPtOcuQ7nk',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 77,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 58,
			user_id : 7161540457048746706,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 51,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 26,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 23,
			document_id : 4840393354559951851,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 21,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```