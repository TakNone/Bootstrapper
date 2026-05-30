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
	message : 'A9G7YkP5Nt8s4afS',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 21,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 92,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 5,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 83,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 93,
			language : 'i0GAONlQPtWL5Vbd',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : -535879576626829567,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 41,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 12,
			document_id : 8307971506406955934,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 81,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```