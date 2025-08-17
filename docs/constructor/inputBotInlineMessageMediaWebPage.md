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
	message : 'go0GEnFbZHxDvdkP',
	entities : array(
		$client->messageEntityUnknown(
			offset : 78,
			length : 18,
		),
		$client->messageEntityMention(
			offset : 90,
			length : 27,
		),
		$client->messageEntityHashtag(
			offset : 28,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 55,
			length : 68,
		),
		$client->messageEntityUrl(
			offset : 1,
			length : 96,
		),
		$client->messageEntityEmail(
			offset : 39,
			length : 31,
		),
		$client->messageEntityBold(
			offset : 22,
			length : 92,
		),
		$client->messageEntityItalic(
			offset : 78,
			length : 97,
		),
		$client->messageEntityCode(
			offset : 50,
			length : 57,
		),
		$client->messageEntityPre(
			offset : 46,
			length : 37,
			language : 'dsVavZti2HAzx0bU',
		),
		$client->messageEntityTextUrl(
			offset : 47,
			length : 97,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 97,
			length : 68,
			user_id : 7049403350279446783,
		),
		$client->inputMessageEntityMentionName(
			offset : 77,
			length : 58,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 19,
			length : 40,
		),
		$client->messageEntityCashtag(
			offset : 75,
			length : 24,
		),
		$client->messageEntityUnderline(
			offset : 34,
			length : 98,
		),
		$client->messageEntityStrike(
			offset : 71,
			length : 67,
		),
		$client->messageEntityBankCard(
			offset : 54,
			length : 49,
		),
		$client->messageEntitySpoiler(
			offset : 45,
			length : 82,
		),
		$client->messageEntityCustomEmoji(
			offset : 42,
			length : 85,
			document_id : 4636898647661537936,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 4,
			length : 39,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```