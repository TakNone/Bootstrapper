# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 214

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
	message : 'UrxdfvYtiLuKT6hq',
	entities : array(
		$client->messageEntityUnknown(
			offset : 65,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 56,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 32,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 47,
			length : 23,
		),
		$client->messageEntityUrl(
			offset : 28,
			length : 2,
		),
		$client->messageEntityEmail(
			offset : 40,
			length : 94,
		),
		$client->messageEntityBold(
			offset : 57,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 80,
			length : 39,
		),
		$client->messageEntityCode(
			offset : 81,
			length : 77,
		),
		$client->messageEntityPre(
			offset : 81,
			length : 98,
			language : 'qvoKOzQefU3ThXZx',
		),
		$client->messageEntityTextUrl(
			offset : 61,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 27,
			length : 56,
			user_id : 1518257312361266130,
		),
		$client->inputMessageEntityMentionName(
			offset : 32,
			length : 17,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 27,
			length : 61,
		),
		$client->messageEntityCashtag(
			offset : 40,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 38,
			length : 96,
		),
		$client->messageEntityStrike(
			offset : 80,
			length : 96,
		),
		$client->messageEntityBankCard(
			offset : 38,
			length : 87,
		),
		$client->messageEntitySpoiler(
			offset : 84,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 59,
			length : 93,
			document_id : 1764164424040863135,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 78,
			length : 28,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```