# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link » to be created by the current account*

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
	message : 'l76H23K0qvV9Nodu',
	entities : array(
		$client->messageEntityUnknown(
			offset : 34,
			length : 94,
		),
		$client->messageEntityMention(
			offset : 25,
			length : 15,
		),
		$client->messageEntityHashtag(
			offset : 39,
			length : 80,
		),
		$client->messageEntityBotCommand(
			offset : 92,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 16,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 62,
			length : 35,
		),
		$client->messageEntityBold(
			offset : 96,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 100,
			length : 23,
		),
		$client->messageEntityCode(
			offset : 58,
			length : 28,
		),
		$client->messageEntityPre(
			offset : 56,
			length : 69,
			language : 'mx78viE6LsPqtFIc',
		),
		$client->messageEntityTextUrl(
			offset : 78,
			length : 97,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 5,
			length : 61,
			user_id : -3860560259046231245,
		),
		$client->inputMessageEntityMentionName(
			offset : 20,
			length : 47,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 48,
			length : 87,
		),
		$client->messageEntityCashtag(
			offset : 24,
			length : 12,
		),
		$client->messageEntityUnderline(
			offset : 25,
			length : 9,
		),
		$client->messageEntityStrike(
			offset : 5,
			length : 39,
		),
		$client->messageEntityBankCard(
			offset : 20,
			length : 62,
		),
		$client->messageEntitySpoiler(
			offset : 31,
			length : 29,
		),
		$client->messageEntityCustomEmoji(
			offset : 29,
			length : 90,
			document_id : -1661466767974418011,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 30,
			length : 21,
		),
	),
	title : 'TxBeWPfcUE9tjmiy',
);
```