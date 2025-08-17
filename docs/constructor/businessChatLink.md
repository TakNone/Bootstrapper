# businessChatLink

**Description** : *Contains info about a business chat deep link » created by the current account*

**Layer** : 211

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
	link : 'Wm7Yq2eIDAtcMyKs',
	message : 'F9RWn1aLfX6Biy2r',
	entities : array(
		$client->messageEntityUnknown(
			offset : 31,
			length : 81,
		),
		$client->messageEntityMention(
			offset : 26,
			length : 71,
		),
		$client->messageEntityHashtag(
			offset : 35,
			length : 28,
		),
		$client->messageEntityBotCommand(
			offset : 39,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 14,
			length : 49,
		),
		$client->messageEntityEmail(
			offset : 100,
			length : 99,
		),
		$client->messageEntityBold(
			offset : 76,
			length : 79,
		),
		$client->messageEntityItalic(
			offset : 37,
			length : 94,
		),
		$client->messageEntityCode(
			offset : 51,
			length : 18,
		),
		$client->messageEntityPre(
			offset : 41,
			length : 67,
			language : 'HZ7G3jIRde2L0SxB',
		),
		$client->messageEntityTextUrl(
			offset : 32,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 28,
			length : 44,
			user_id : 2860697067372799519,
		),
		$client->inputMessageEntityMentionName(
			offset : 53,
			length : 64,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 24,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 44,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 71,
			length : 82,
		),
		$client->messageEntityStrike(
			offset : 24,
			length : 15,
		),
		$client->messageEntityBankCard(
			offset : 6,
			length : 40,
		),
		$client->messageEntitySpoiler(
			offset : 62,
			length : 22,
		),
		$client->messageEntityCustomEmoji(
			offset : 14,
			length : 64,
			document_id : -6965571994185809718,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 89,
			length : 65,
		),
	),
	title : 'WcEXn5uyijwUN9dZ',
	views : 78,
);
```