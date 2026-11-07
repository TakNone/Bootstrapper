# botInlineMessageMediaWebPage

**Description** : *Specifies options that must be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 233

```tl
botInlineMessageMediaWebPage#809ad9a6 flags:# invert_media:flags.3?true force_large_media:flags.4?true force_small_media:flags.5?true manual:flags.7?true safe:flags.8?true message:string entities:flags.1?Vector<MessageEntity> url:string reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'ZBUSAxMPnNdHwbuO',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 12,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 58,
			language : 'cJVNzYnp30XFAu5x',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 86,
			user_id : -8745893327258934026,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 39,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 6,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 52,
			document_id : 8936493412378673571,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 9,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 78,
			date : 55,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 89,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 95,
			old_text : 'wnSRCdQuvKWl3TeM',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 100,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 100,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```