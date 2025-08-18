# inputBotInlineMessageMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 211

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
	message : 'LpuARcvKNZPBYt0r',
	entities : array(
		$client->messageEntityUnknown(
			offset : 22,
			length : 56,
		),
		$client->messageEntityMention(
			offset : 2,
			length : 53,
		),
		$client->messageEntityHashtag(
			offset : 12,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 37,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 81,
			length : 35,
		),
		$client->messageEntityEmail(
			offset : 53,
			length : 57,
		),
		$client->messageEntityBold(
			offset : 86,
			length : 58,
		),
		$client->messageEntityItalic(
			offset : 10,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 3,
			length : 25,
		),
		$client->messageEntityPre(
			offset : 70,
			length : 66,
			language : 'eTU7COzxFwArm1gc',
		),
		$client->messageEntityTextUrl(
			offset : 98,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 47,
			length : 4,
			user_id : -8632407712618812972,
		),
		$client->inputMessageEntityMentionName(
			offset : 80,
			length : 17,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 16,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 20,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 45,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 93,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 32,
			length : 19,
		),
		$client->messageEntitySpoiler(
			offset : 2,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 68,
			length : 44,
			document_id : -6914488597747257717,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 84,
			length : 72,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```