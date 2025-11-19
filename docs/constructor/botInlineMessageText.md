# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 218

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
	message : 'bj2PrGRkJlgiafsO',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 15,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 25,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 49,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 25,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 67,
			language : 'IR3CqyeHcftF4ALp',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 19,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : -8902080635932999306,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 82,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 79,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 31,
			document_id : 2946656792557613671,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 79,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```