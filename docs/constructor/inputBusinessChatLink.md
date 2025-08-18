# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 211

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
	message : 'zgRYV5JDaileAkjn',
	entities : array(
		$client->messageEntityUnknown(
			offset : 72,
			length : 53,
		),
		$client->messageEntityMention(
			offset : 33,
			length : 98,
		),
		$client->messageEntityHashtag(
			offset : 34,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 94,
			length : 35,
		),
		$client->messageEntityUrl(
			offset : 68,
			length : 66,
		),
		$client->messageEntityEmail(
			offset : 26,
			length : 50,
		),
		$client->messageEntityBold(
			offset : 47,
			length : 58,
		),
		$client->messageEntityItalic(
			offset : 42,
			length : 40,
		),
		$client->messageEntityCode(
			offset : 3,
			length : 75,
		),
		$client->messageEntityPre(
			offset : 70,
			length : 17,
			language : 'nzGMhA3o45QYXVsL',
		),
		$client->messageEntityTextUrl(
			offset : 7,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 84,
			length : 56,
			user_id : 2182208222565562913,
		),
		$client->inputMessageEntityMentionName(
			offset : 85,
			length : 38,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 89,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 73,
			length : 48,
		),
		$client->messageEntityUnderline(
			offset : 7,
			length : 19,
		),
		$client->messageEntityStrike(
			offset : 1,
			length : 68,
		),
		$client->messageEntityBankCard(
			offset : 52,
			length : 57,
		),
		$client->messageEntitySpoiler(
			offset : 92,
			length : 82,
		),
		$client->messageEntityCustomEmoji(
			offset : 7,
			length : 40,
			document_id : -1288723756138609549,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 94,
			length : 68,
		),
	),
	title : 'mD8qZfXbQRJKA9Wy',
);
```