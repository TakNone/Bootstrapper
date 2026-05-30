# inputBotInlineMessageMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 225

```tl
inputBotInlineMessageMediaWebPage#bddcc510 flags:# invert_media:flags.3?true force_large_media:flags.4?true force_small_media:flags.5?true optional:flags.6?true message:string entities:flags.1?Vector<MessageEntity> url:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **force_large_media** | [`flags.4?true`](type/true) | If set, specifies that a large media preview should be used |
| **force_small_media** | [`flags.5?true`](type/true) | If set, specifies that a small media preview should be used |
| **optional** | [`flags.6?true`](type/true) | If not set, a WEBPAGE_NOT_FOUND RPC error will be emitted if a webpage preview cannot be generated for the specified url; otherwise, no error will be emitted (unless the provided message is also empty, in which case a MESSAGE_EMPTY will be emitted, instead) |
| <mark>message</mark> | [`string`](type/string) | The message, can be empty |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>url</mark> | [`string`](type/string) | The URL to use for the link preview |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaWebPage(
	invert_media : true,
	force_large_media : true,
	force_small_media : true,
	optional : true,
	message : 'b3IyAOq9ofiY6UcD',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 50,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 0,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 35,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 86,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 2,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : 'xzk5DfHY9ngtuVPQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 45,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 23,
			user_id : 712389531277842190,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 35,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 16,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 15,
			document_id : 5766658156541195136,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 54,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 92,
			date : 77,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 89,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 51,
			old_text : 'fnMXQpIkHVqNbcrz',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 39,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```