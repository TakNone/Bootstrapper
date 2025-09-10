# botInlineMessageMediaWebPage

**Description** : *Specifies options that must be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 214

```tl
botInlineMessageMediaWebPage#809ad9a6 flags:# invert_media:flags.3?true force_large_media:flags.4?true force_small_media:flags.5?true manual:flags.7?true safe:flags.8?true message:string entities:flags.1?Vector<MessageEntity> url:string reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **force_large_media** | [`flags.4?true`](type/true) | If set, specifies that a large media preview should be used |
| **force_small_media** | [`flags.5?true`](type/true) | If set, specifies that a small media preview should be used |
| **manual** | [`flags.7?true`](type/true) | If set, indicates that the URL used for the webpage preview was specified manually using inputMediaWebPage, and may not be related to any of the URLs specified in the message |
| **safe** | [`flags.8?true`](type/true) | If set, the link can be opened directly without user confirmation |
| <mark>message</mark> | [`string`](type/string) | The message, can be empty |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>url</mark> | [`string`](type/string) | The URL to use for the link preview |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Reply markup for sending bot buttons |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaWebPage(
	invert_media : true,
	force_large_media : true,
	force_small_media : true,
	manual : true,
	safe : true,
	message : 'v1y9juZMS2O85ebU',
	entities : array(
		$client->messageEntityUnknown(
			offset : 45,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 72,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 21,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 50,
			length : 83,
		),
		$client->messageEntityUrl(
			offset : 90,
			length : 72,
		),
		$client->messageEntityEmail(
			offset : 29,
			length : 84,
		),
		$client->messageEntityBold(
			offset : 94,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 90,
			length : 67,
		),
		$client->messageEntityCode(
			offset : 7,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 59,
			length : 38,
			language : 'zpcXSvKB6MJAwQTt',
		),
		$client->messageEntityTextUrl(
			offset : 87,
			length : 32,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 19,
			length : 5,
			user_id : -6694260195302754791,
		),
		$client->inputMessageEntityMentionName(
			offset : 96,
			length : 13,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 32,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 30,
			length : 63,
		),
		$client->messageEntityUnderline(
			offset : 97,
			length : 4,
		),
		$client->messageEntityStrike(
			offset : 19,
			length : 90,
		),
		$client->messageEntityBankCard(
			offset : 78,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 58,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 62,
			length : 12,
			document_id : -313992740214976187,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 28,
			length : 67,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```