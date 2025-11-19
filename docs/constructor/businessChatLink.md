# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 218

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
	link : '9hwV4y5TLENQXi7t',
	message : 'UW7Af8nihBNkQDC0',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 78,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 43,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 59,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 89,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 12,
			language : 'rMdBpm0NbKigeZFU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 12,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : 2044423828670561891,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 54,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 53,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 85,
			document_id : 405610675192612385,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 89,
		),
	),
	title : 'uMbiQo7HFpqfTgRD',
	views : 100,
);
```