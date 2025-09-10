# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 214

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
	message : 'I8M7YfhZAdCOgPuz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 97,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 89,
			length : 12,
		),
		$client->messageEntityHashtag(
			offset : 82,
			length : 60,
		),
		$client->messageEntityBotCommand(
			offset : 6,
			length : 82,
		),
		$client->messageEntityUrl(
			offset : 29,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 17,
			length : 2,
		),
		$client->messageEntityBold(
			offset : 31,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 12,
			length : 32,
		),
		$client->messageEntityCode(
			offset : 31,
			length : 98,
		),
		$client->messageEntityPre(
			offset : 28,
			length : 96,
			language : 'gZDT6zn2HYOr5VMF',
		),
		$client->messageEntityTextUrl(
			offset : 83,
			length : 39,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 5,
			length : 56,
			user_id : 8313177923704087920,
		),
		$client->inputMessageEntityMentionName(
			offset : 6,
			length : 15,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 50,
			length : 1,
		),
		$client->messageEntityCashtag(
			offset : 60,
			length : 32,
		),
		$client->messageEntityUnderline(
			offset : 51,
			length : 93,
		),
		$client->messageEntityStrike(
			offset : 62,
			length : 71,
		),
		$client->messageEntityBankCard(
			offset : 55,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 85,
			length : 63,
		),
		$client->messageEntityCustomEmoji(
			offset : 81,
			length : 22,
			document_id : 576533847295721355,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 84,
			length : 86,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```