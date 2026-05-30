# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 222

```tl
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : '8W0buqtjJOEcg3sw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 2,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 79,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 90,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 95,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 99,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 38,
			language : '7VPZUKe5DTolytgq',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 97,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 20,
			user_id : -5448238592964276283,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 43,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 53,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 15,
			document_id : 1662728686426385464,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 90,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```