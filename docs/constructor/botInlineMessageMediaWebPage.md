# botInlineMessageMediaWebPage

**Description** : *Specifies options that must be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 211

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
	message : 'nuGZMp1Nw6BJqOCo',
	entities : array(
		$client->messageEntityUnknown(
			offset : 10,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 55,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 6,
			length : 44,
		),
		$client->messageEntityBotCommand(
			offset : 26,
			length : 4,
		),
		$client->messageEntityUrl(
			offset : 49,
			length : 48,
		),
		$client->messageEntityEmail(
			offset : 38,
			length : 95,
		),
		$client->messageEntityBold(
			offset : 4,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 37,
			length : 25,
		),
		$client->messageEntityCode(
			offset : 11,
			length : 67,
		),
		$client->messageEntityPre(
			offset : 16,
			length : 60,
			language : 'Z6rUackOX4oznhWL',
		),
		$client->messageEntityTextUrl(
			offset : 32,
			length : 92,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 72,
			length : 98,
			user_id : 2302663803337326575,
		),
		$client->inputMessageEntityMentionName(
			offset : 85,
			length : 70,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 54,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 91,
			length : 2,
		),
		$client->messageEntityUnderline(
			offset : 65,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 59,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 78,
			length : 85,
		),
		$client->messageEntitySpoiler(
			offset : 11,
			length : 11,
		),
		$client->messageEntityCustomEmoji(
			offset : 85,
			length : 7,
			document_id : 216339656640769837,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 15,
			length : 64,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```