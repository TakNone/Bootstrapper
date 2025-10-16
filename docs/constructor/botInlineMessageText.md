# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 216

```tl
botInlineMessageText#8c7f65e2 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.0?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | The message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageText(
	no_webpage : true,
	invert_media : true,
	message : 'gIOtqYm1BM0PQyUS',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 95,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 65,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 68,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 60,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 16,
			language : '1dS4asPkp0xQcmZX',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 30,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : 2095814295772848470,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 17,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : 2178177420492659400,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 85,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```