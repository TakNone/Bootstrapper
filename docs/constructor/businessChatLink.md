# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

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
	link : 'hpXKOdneCT25BUYG',
	message : 'n9julT7ye1FshdtC',
	entities : array(
		$client->messageEntityUnknown(
			offset : 48,
			length : 82,
		),
		$client->messageEntityMention(
			offset : 66,
			length : 78,
		),
		$client->messageEntityHashtag(
			offset : 90,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 63,
			length : 21,
		),
		$client->messageEntityUrl(
			offset : 63,
			length : 49,
		),
		$client->messageEntityEmail(
			offset : 28,
			length : 2,
		),
		$client->messageEntityBold(
			offset : 39,
			length : 65,
		),
		$client->messageEntityItalic(
			offset : 96,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 51,
			length : 69,
		),
		$client->messageEntityPre(
			offset : 13,
			length : 1,
			language : 's1U02tOguzTpL3Pe',
		),
		$client->messageEntityTextUrl(
			offset : 35,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 20,
			length : 8,
			user_id : 7061433543603991474,
		),
		$client->inputMessageEntityMentionName(
			offset : 56,
			length : 68,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 64,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 12,
			length : 53,
		),
		$client->messageEntityUnderline(
			offset : 84,
			length : 62,
		),
		$client->messageEntityStrike(
			offset : 38,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 19,
			length : 29,
		),
		$client->messageEntitySpoiler(
			offset : 15,
			length : 40,
		),
		$client->messageEntityCustomEmoji(
			offset : 34,
			length : 58,
			document_id : -6125518968553967857,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 87,
			length : 73,
		),
	),
	title : 'X7S4rcL69FNqjHI1',
	views : 10,
);
```