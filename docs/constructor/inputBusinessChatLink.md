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
	message : 'OYxj9ApS8ZFzdHQg',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 3,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 35,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 75,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 87,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 23,
			language : '4xjVR5qb1yCAwTrN',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 70,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : 6704303896202818279,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 38,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 24,
			document_id : -3099600073141783327,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 90,
		),
	),
	title : 'O7KHgf2N6IyMrCbo',
);
```