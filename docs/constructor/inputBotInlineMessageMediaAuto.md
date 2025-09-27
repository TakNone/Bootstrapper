# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 216

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'jaT25PDCNtZXAb9x',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 24,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 45,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 87,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 50,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 87,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 55,
			language : 'yJEHbeWIoYGisMUA',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : 2867408318245991386,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 64,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 67,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 12,
			document_id : 5381554384909050080,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 7,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```