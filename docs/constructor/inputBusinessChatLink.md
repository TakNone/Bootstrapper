# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 216

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
	message : 'ypcl1RFbXtjVvShH',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 32,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 93,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 26,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 84,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 21,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 93,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 61,
			language : 'fxhP1XiqDZ4sIjOc',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 28,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : -1992136631588681497,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 79,
			document_id : -7665886434315845022,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 9,
		),
	),
	title : 'pmgTdFC59uUeE0vN',
);
```