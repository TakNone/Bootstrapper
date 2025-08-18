# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 211

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
	message : 'MKyea9DW7NjhcY8u',
	entities : array(
		$client->messageEntityUnknown(
			offset : 8,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 96,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 42,
			length : 93,
		),
		$client->messageEntityBotCommand(
			offset : 90,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 13,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 33,
			length : 57,
		),
		$client->messageEntityBold(
			offset : 91,
			length : 78,
		),
		$client->messageEntityItalic(
			offset : 43,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 38,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 4,
			length : 16,
			language : 'HWeThzc2BICxG9J7',
		),
		$client->messageEntityTextUrl(
			offset : 41,
			length : 79,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 53,
			length : 30,
			user_id : 5863116367718214748,
		),
		$client->inputMessageEntityMentionName(
			offset : 4,
			length : 65,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 88,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 52,
			length : 20,
		),
		$client->messageEntityUnderline(
			offset : 34,
			length : 31,
		),
		$client->messageEntityStrike(
			offset : 69,
			length : 14,
		),
		$client->messageEntityBankCard(
			offset : 54,
			length : 73,
		),
		$client->messageEntitySpoiler(
			offset : 84,
			length : 60,
		),
		$client->messageEntityCustomEmoji(
			offset : 84,
			length : 46,
			document_id : 3138174010271948434,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 28,
			length : 31,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```