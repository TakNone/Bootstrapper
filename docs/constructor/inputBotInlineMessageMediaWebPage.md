# inputBotInlineMessageMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 216

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
	message : 'BjovRVZQ2k9e6fF4',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 51,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 89,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 71,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 80,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 38,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 64,
			language : 'O9DXjd2sF4KktNQ3',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 14,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 77,
			user_id : 6440431343414073671,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 45,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 74,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 45,
			document_id : -3903309631570583562,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
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