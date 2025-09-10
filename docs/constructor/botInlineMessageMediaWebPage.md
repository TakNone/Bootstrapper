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
	message : 'k4hfn91rCLSuWwTj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 63,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 6,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 45,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 72,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : '2ZwegqYVymUisdAP',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 1,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : 1534232155003380137,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 89,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 76,
			document_id : -3716818313531927938,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 89,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```