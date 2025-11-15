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
	message : 'nb2TOISU8rmNzB6G',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 40,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 2,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 50,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 37,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 99,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 84,
			language : 'dwnQ1s98mUhF0Sij',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 26,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : -1080157278589765858,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 34,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 27,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 4,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 39,
			document_id : -134057854173666384,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 5,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```