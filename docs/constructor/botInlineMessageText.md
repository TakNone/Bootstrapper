# botInlineMessageText

**Description** : *Send a simple text message*

**Layer** : 222

```tl
botInlineMessageText#8c7f65e2 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'UJ08KPxZEcu3NdAY',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 76,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 95,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 41,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 62,
			language : 'qY5evRhHNl1QnDJm',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 69,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : -9104065569677736914,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 87,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 6,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 65,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 33,
			document_id : 1886013974712047113,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 36,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```