# inputBotInlineMessageMediaWebPage

**Description** : *Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message*

**Layer** : 214

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
	message : 'QWvcsbL0fVlgCIAp',
	entities : array(
		$client->messageEntityUnknown(
			offset : 21,
			length : 93,
		),
		$client->messageEntityMention(
			offset : 59,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 15,
			length : 89,
		),
		$client->messageEntityBotCommand(
			offset : 76,
			length : 38,
		),
		$client->messageEntityUrl(
			offset : 33,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 31,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 52,
			length : 0,
		),
		$client->messageEntityItalic(
			offset : 66,
			length : 38,
		),
		$client->messageEntityCode(
			offset : 35,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 20,
			length : 78,
			language : 'tShjxH0fE6pKlCM1',
		),
		$client->messageEntityTextUrl(
			offset : 30,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 80,
			length : 11,
			user_id : 5164288346494529706,
		),
		$client->inputMessageEntityMentionName(
			offset : 9,
			length : 94,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 7,
			length : 19,
		),
		$client->messageEntityCashtag(
			offset : 83,
			length : 74,
		),
		$client->messageEntityUnderline(
			offset : 29,
			length : 99,
		),
		$client->messageEntityStrike(
			offset : 97,
			length : 6,
		),
		$client->messageEntityBankCard(
			offset : 2,
			length : 99,
		),
		$client->messageEntitySpoiler(
			offset : 49,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 22,
			length : 26,
			document_id : 1845750379470375940,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 69,
			length : 7,
		),
	),
	url : 'https://docs.liveproto.dev',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```