# inputBotInlineMessageMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 218

```tl
inputBotInlineMessageMediaWebPage#bddcc510 flags:# invert_media:flags.3?true force_large_media:flags.4?true force_small_media:flags.5?true optional:flags.6?true message:string entities:flags.1?Vector<MessageEntity> url:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'BSCcaEn0TW6pZ47H',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 78,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 66,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 30,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 70,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 31,
			language : '2bld9KfmZAznUB6P',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : 6498817026123537549,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 41,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 90,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 92,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 66,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 64,
			document_id : 6210185563892652401,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 58,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```