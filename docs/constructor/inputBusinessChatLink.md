# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 214

```tl
inputBusinessChatLink#11679fa7 flags:# message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string = InputBusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |

---

## Type

[InputBusinessChatLink](type/InputBusinessChatLink)

---

## Example

```php
$inputBusinessChatLink = $client->inputBusinessChatLink(
	message : '9Pfvwx21NrcaRnbj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 43,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 2,
			length : 34,
		),
		$client->messageEntityHashtag(
			offset : 100,
			length : 17,
		),
		$client->messageEntityBotCommand(
			offset : 55,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 48,
			length : 87,
		),
		$client->messageEntityEmail(
			offset : 24,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 98,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 18,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 37,
			length : 20,
		),
		$client->messageEntityPre(
			offset : 71,
			length : 79,
			language : 'nRX1PuDiGy6YQxWT',
		),
		$client->messageEntityTextUrl(
			offset : 53,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 99,
			length : 0,
			user_id : 6806033651514821877,
		),
		$client->inputMessageEntityMentionName(
			offset : 87,
			length : 53,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 64,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 45,
			length : 93,
		),
		$client->messageEntityUnderline(
			offset : 69,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 80,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 33,
			length : 6,
		),
		$client->messageEntitySpoiler(
			offset : 48,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 47,
			length : 50,
			document_id : 7834897776470294731,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 18,
			length : 23,
		),
	),
	title : 'SG6w98a5H1bvWtZc',
);
```