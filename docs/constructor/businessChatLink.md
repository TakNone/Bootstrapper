# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 214

```tl
businessChatLink#b4ae666f flags:# link:string message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string views:int = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>link</mark> | [`string`](type/string) | Business chat deep link |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |
| <mark>views</mark> | [`int`](type/int) | Number of times the link was resolved (clicked/scanned/etc...) |

---

## Type

[BusinessChatLink](type/BusinessChatLink)

---

## Example

```php
$businessChatLink = $client->businessChatLink(
	link : 'JuDL6hYWOcjxr0s2',
	message : 'VeApyLzuDI6s3cBK',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 22,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 32,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 6,
			language : '4OZfXeLPK6ByzFW0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 37,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : -8427236284990272171,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 50,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 55,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 23,
			document_id : -538105718698905390,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 18,
		),
	),
	title : 'YnVXI8W9uwgrt5Np',
	views : 18,
);
```