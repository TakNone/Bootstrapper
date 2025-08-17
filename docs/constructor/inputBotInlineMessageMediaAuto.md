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
	message : '2I0J1RoNZnHl8G3U',
	entities : array(
		$client->messageEntityUnknown(
			offset : 63,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 36,
			length : 97,
		),
		$client->messageEntityHashtag(
			offset : 89,
			length : 22,
		),
		$client->messageEntityBotCommand(
			offset : 79,
			length : 77,
		),
		$client->messageEntityUrl(
			offset : 16,
			length : 41,
		),
		$client->messageEntityEmail(
			offset : 5,
			length : 12,
		),
		$client->messageEntityBold(
			offset : 12,
			length : 88,
		),
		$client->messageEntityItalic(
			offset : 56,
			length : 14,
		),
		$client->messageEntityCode(
			offset : 30,
			length : 37,
		),
		$client->messageEntityPre(
			offset : 41,
			length : 84,
			language : 'y80EgGsva3MNTKPB',
		),
		$client->messageEntityTextUrl(
			offset : 94,
			length : 94,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 89,
			length : 2,
			user_id : 2043905868378540771,
		),
		$client->inputMessageEntityMentionName(
			offset : 96,
			length : 23,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 96,
			length : 33,
		),
		$client->messageEntityCashtag(
			offset : 77,
			length : 36,
		),
		$client->messageEntityUnderline(
			offset : 18,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 10,
			length : 8,
		),
		$client->messageEntityBankCard(
			offset : 69,
			length : 32,
		),
		$client->messageEntitySpoiler(
			offset : 19,
			length : 86,
		),
		$client->messageEntityCustomEmoji(
			offset : 44,
			length : 47,
			document_id : 8535156137714129108,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 84,
			length : 50,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```