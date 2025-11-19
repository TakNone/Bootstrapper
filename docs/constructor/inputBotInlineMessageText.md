# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 218

```tl
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.0?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageText(
	no_webpage : true,
	invert_media : true,
	message : 'e5C7VIZDWsnOGuiU',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 38,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 84,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 93,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 31,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 9,
			language : 'oaDSCkxb2N7RKJnP',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 56,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : 8587948258806663715,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 52,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 71,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 76,
			document_id : -2936926450806934041,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 77,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```