# inputBotInlineMessageMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 227

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
	message : '9uKqIAMDBlE0WcgO',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 57,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 26,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 68,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 75,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 90,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : 'R7qdQgEhpaU6bSWw',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 28,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 26,
			user_id : -2923496655721658498,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 23,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 86,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 87,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 62,
			document_id : 2260573261529467095,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 63,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 69,
			date : 39,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 71,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 5,
			old_text : 'BWnb5iFdyhHVOlGR',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 8,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```