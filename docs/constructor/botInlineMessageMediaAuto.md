# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 222

```tl
botInlineMessageMediaAuto#764cf810 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'wVIczv0HdRJeqy78',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 64,
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
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 48,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 91,
			language : 'Rfe2pmXg0wd8cv7Z',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 5,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 76,
			user_id : -3433283156420704444,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 34,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : 8697308095595780542,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 58,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```