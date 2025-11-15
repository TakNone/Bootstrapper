# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 216

```tl
botInlineMessageMediaAuto#764cf810 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
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

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaAuto(
	invert_media : true,
	message : '0ioshcWMptbXnJ4V',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 94,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 51,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 72,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 96,
			language : 'BzNDSsyIQhdK6kL7',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 94,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : -6886622864321702954,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 4,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 87,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 16,
			document_id : 4017610280055271950,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 75,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```