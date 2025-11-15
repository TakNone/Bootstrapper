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
	message : '01vKFNsnYdOj56WG',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 2,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 31,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 21,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 98,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 8,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 21,
			language : '1tC4jRUqSzmGKBDv',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 33,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : 2408993964582539572,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 31,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 7,
			document_id : -7862490791437799788,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
	),
	title : 'wgYFHPei52Mm7aBq',
);
```