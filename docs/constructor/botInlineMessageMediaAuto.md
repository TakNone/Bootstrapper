# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 218

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
	message : 'MQh9pyuloJKFNStw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 88,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 14,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 2,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 87,
			language : 'MmgRJlOwAy5G142Y',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 6,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : 1247091193867113416,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 48,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 33,
			document_id : 1711111185652298556,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 40,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```